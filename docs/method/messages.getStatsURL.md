# messages.getStatsURL

**Description** : *Returns URL with the chat statistics\. Currently this method can be used only for channels*

**Layer** : 216

```tl
messages.getStatsURL#812c2ae6 flags:# dark:flags.0?true peer:InputPeer params:string = StatsURL;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **dark** | [`flags.0?true`](type/true) | Pass true if a URL with the dark theme must be returned |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Chat identifier |
| <mark>params</mark> | [`string`](type/string) | Parameters from tg://statsrefresh?params=****** link |

---

## Result

[StatsURL](type/StatsURL)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$statsURL = $client->messages->getStatsURL(
	dark : true,
	peer : $client->inputPeerEmpty(),
	params : 'TbYvcl4idGKIkFjm',
);
```