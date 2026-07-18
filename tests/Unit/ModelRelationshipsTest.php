<?php

use App\Enums\OrderStatus;
use App\Enums\ShopStatus;
use App\Enums\UserRole;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

it('configures the main model relationships and casts', function (): void {
    $user = new User;

    expect($user->shops())->toBeInstanceOf(HasMany::class)
        ->and($user->orders())->toBeInstanceOf(HasMany::class);

    $shop = new Shop;

    expect($shop->user())->toBeInstanceOf(BelongsTo::class)
        ->and($shop->products())->toBeInstanceOf(HasMany::class)
        ->and($shop->orders())->toBeInstanceOf(HasMany::class);

    $product = new Product;

    expect($product->shop())->toBeInstanceOf(BelongsTo::class)
        ->and($product->items())->toBeInstanceOf(HasMany::class);

    $order = new Order;

    expect($order->user())->toBeInstanceOf(BelongsTo::class)
        ->and($order->shop())->toBeInstanceOf(BelongsTo::class)
        ->and($order->items())->toBeInstanceOf(HasMany::class);

    $item = new Item;

    expect($item->order())->toBeInstanceOf(BelongsTo::class)
        ->and($item->product())->toBeInstanceOf(BelongsTo::class);

    $user->forceFill(['role' => 'farmer']);

    expect($user->role)->toBeInstanceOf(UserRole::class)
        ->and($user->role->value)->toBe('farmer');

    $shop->forceFill(['status' => 'open']);

    expect($shop->status)->toBeInstanceOf(ShopStatus::class)
        ->and($shop->status->value)->toBe('open');

    $order->forceFill(['status' => 'placed']);

    expect($order->status)->toBeInstanceOf(OrderStatus::class)
        ->and($order->status->value)->toBe('placed');
});
