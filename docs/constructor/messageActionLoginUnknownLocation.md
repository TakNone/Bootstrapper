# messageActionLoginUnknownLocation

**Layer** : 214

```tl
messageActionLoginUnknownLocation#555555f5 title:string address:string = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>title</mark> | [`string`](type/string) | NOTHING |
| <mark>address</mark> | [`string`](type/string) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionLoginUnknownLocation(
	title : 'MZT7eF9jGatw1nqx',
	address : 'l5ypFh13sdBzjXQM',
);
```