# textEmail

**Description** : *Rich text email link*

**Layer** : 211

```tl
textEmail#de5a0dd6 text:RichText email:string = RichText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | Link text |
| <mark>email</mark> | [`string`](type/string) | Email address |

---

## Type

[RichText](type/RichText)

---

## Example

```php
$richText = $client->textEmail(
	text : $client->textEmpty(),
	email : 'reply@liveproto.dev',
);
```