# richButtonStyle

**Layer** : 229

```tl
richButtonStyle#3c610bd flags:# bg_primary:flags.0?true bg_danger:flags.1?true bg_success:flags.2?true link:flags.3?true = RichButtonStyle;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **bg_primary** | [`flags.0?true`](type/true) | NOTHING |
| **bg_danger** | [`flags.1?true`](type/true) | NOTHING |
| **bg_success** | [`flags.2?true`](type/true) | NOTHING |
| **link** | [`flags.3?true`](type/true) | NOTHING |

---

## Type

[RichButtonStyle](type/RichButtonStyle)

---

## Example

```php
$richButtonStyle = $client->richButtonStyle(
	bg_primary : true,
	bg_danger : true,
	bg_success : true,
	link : true,
);
```