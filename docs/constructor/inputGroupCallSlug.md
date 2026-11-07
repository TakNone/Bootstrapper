# inputGroupCallSlug

**Description** : *Identify a conference call &raquo; using the slug from its invitation link*

**Layer** : 233

```tl
inputGroupCallSlug#fe06823f slug:string = InputGroupCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | Slug from the conference link » |

---

## Type

[InputGroupCall](type/InputGroupCall)

---

## Example

```php
$inputGroupCall = $client->inputGroupCallSlug(
	slug : 'azj7LpkvRUJidWFe',
);
```