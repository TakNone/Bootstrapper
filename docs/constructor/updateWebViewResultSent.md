# updateWebViewResultSent

**Description** : *Indicates to a bot that a webview was closed and an inline message was sent on behalf of the user using messages\.sendWebViewResultMessage*

**Layer** : 214

```tl
updateWebViewResultSent#1592b79d query_id:long = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query_id</mark> | [`long`](type/long) | Web app interaction ID |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateWebViewResultSent(
	query_id : 6213947718420422358,
);
```