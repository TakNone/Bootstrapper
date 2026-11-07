# keyboardButtonStyle

**Description** : *This constructor allows setting a custom background color and custom emoji label for a button, see here &raquo; for more info*

**Layer** : 233

```tl
keyboardButtonStyle#4fdd3430 flags:# bg_primary:flags.0?true bg_danger:flags.1?true bg_success:flags.2?true icon:flags.3?long = KeyboardButtonStyle;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **bg_primary** | [`flags.0?true`](type/true) | A dark blue color, recommended for main actions |
| **bg_danger** | [`flags.1?true`](type/true) | A red color, recommended for destructive actions |
| **bg_success** | [`flags.2?true`](type/true) | A green color, recommended for positive actions |
| **icon** | [`flags.3?long`](type/long) | The ID of a custom emoji to be displayed before the button's label |

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
	icon : 7711119490436679181,
);
```