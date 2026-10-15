# communities.getPeerLinkRequests

**Layer** : 229

```tl
communities.getPeerLinkRequests#93773344 community:InputChannel offset:string limit:int = communities.PeerLinkRequests;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>community</mark> | [`InputChannel`](type/InputChannel) | NOTHING |
| <mark>offset</mark> | [`string`](type/string) | NOTHING |
| <mark>limit</mark> | [`int`](type/int) | NOTHING |

---

## Result

[communities.PeerLinkRequests](type/communities.PeerLinkRequests)

---

## Example

```php
$communitiesPeerLinkRequests = $client->communities->getPeerLinkRequests(
	community : $client->get_input_channel(channel : '@LiveProto'),
	offset : 'utH1lsPmCGwVy2ZI',
	limit : 39,
);
```