# messages.getWebViewResult

**Layer** : 218

```tl
messages.getWebViewResult#22b6c214 peer:InputPeer bot:InputUser query_id:long = messages.WebViewResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |

---

## Result

[messages.WebViewResult](type/messages.WebViewResult)

---

## Example

```php
$messagesWebViewResult = $client->messages->getWebViewResult(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	bot : $client->get_input_user(user : '@TakNone'),
	query_id : -2227784695203322823,
);
```