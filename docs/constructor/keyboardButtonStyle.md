# keyboardButtonStyle

**Layer** : 222

```tl
keyboardButtonStyle#4fdd3430 flags:# bg_primary:flags.0?true bg_danger:flags.1?true bg_success:flags.2?true icon:flags.3?long = KeyboardButtonStyle;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **bg_primary** | [`flags.0?true`](type/true) | NOTHING |
| **bg_danger** | [`flags.1?true`](type/true) | NOTHING |
| **bg_success** | [`flags.2?true`](type/true) | NOTHING |
| **icon** | [`flags.3?long`](type/long) | NOTHING |

---

## Type

[KeyboardButtonStyle](type/KeyboardButtonStyle)

---

## Example

```php
$keyboardButtonStyle = $client->keyboardButtonStyle(
	bg_primary : true,
	bg_danger : true,
	bg_success : true,
	icon : -26774603973424369,
);
```