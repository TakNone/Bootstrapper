# exportedMessageLink

**Description** : *Link to a message in a supergroup/channel*

**Layer** : 225

```tl
exportedMessageLink#5dab1af4 link:string html:string = ExportedMessageLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>link</mark> | [`string`](type/string) | URL |
| <mark>html</mark> | [`string`](type/string) | Embed code |

---

## Type

[ExportedMessageLink](type/ExportedMessageLink)

---

## Example

```php
$exportedMessageLink = $client->exportedMessageLink(
	link : 'h8SjyL5XsBZRdOPN',
	html : 'QEJ6psyFqRUvzHfX',
);
```