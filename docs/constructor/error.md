# error

**Description** : *Error*

**Layer** : 229

```tl
error#c4b9f9bb code:int text:string = Error;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>code</mark> | [`int`](type/int) | Error code |
| <mark>text</mark> | [`string`](type/string) | Message |

---

## Type

[Error](type/Error)

---

## Example

```php
$error = $client->error(
	code : 34,
	text : '5AvKd3S90LPkEOnY',
);
```