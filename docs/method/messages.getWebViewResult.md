# messages.getWebViewResult

**Layer** : 216

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
	peer : $client->inputPeerEmpty(),
	bot : $client->inputUserEmpty(),
	query_id : 6617904359770879866,
);
```