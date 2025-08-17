# textPhone

**Description** : *Rich text linked to a phone number*

**Layer** : 211

```tl
textPhone#1ccb966a text:RichText phone:string = RichText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | Text |
| <mark>phone</mark> | [`string`](type/string) | Phone number |

---

## Type

[RichText](type/RichText)

---

## Example

```php
$richText = $client->textPhone(
	text : $client->textEmpty(),
	phone : '+1234567890',
);
```