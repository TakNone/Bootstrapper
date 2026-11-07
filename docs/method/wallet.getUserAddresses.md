# wallet.getUserAddresses

**Layer** : 233

```tl
wallet.getUserAddresses#5275dfdd flags:# force:flags.0?true id:Vector<InputUser> addresses:Vector<string> = wallet.UserAddresses;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **force** | [`flags.0?true`](type/true) | NOTHING |
| <mark>id</mark> | [`Vector<InputUser>`](type/InputUser) | NOTHING |
| <mark>addresses</mark> | [`Vector<string>`](type/string) | NOTHING |

---

## Result

[wallet.UserAddresses](type/wallet.UserAddresses)

---

## Example

```php
$walletUserAddresses = $client->wallet->getUserAddresses(
	force : true,
	id : array($client->get_input_user(user : '@TakNone')),
	addresses : array('afLHklcqFRrzTsi2'),
);
```