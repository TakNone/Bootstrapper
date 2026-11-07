# recentStory

**Description** : *Summary of a peer&#039;s active stories &raquo;, embedded in user\.stories\_max\_id and channel\.stories\_max\_id and returned by stories\.getPeerMaxIDs*

**Layer** : 233

```tl
recentStory#711d692d flags:# live:flags.0?true max_id:flags.1?int = RecentStory;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **live** | [`flags.0?true`](type/true) | Whether the peer is currently broadcasting a live story » |
| **max_id** | [`flags.1?int`](type/int) | If live is set, ID of the peer's active live story »; otherwise, ID of the peer's maximum active story |

---

## Type

[RecentStory](type/RecentStory)

---

## Example

```php
$recentStory = $client->recentStory(
	live : true,
	max_id : 71,
);
```