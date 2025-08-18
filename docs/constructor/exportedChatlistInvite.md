# exportedChatlistInvite

**Description** : *Exported chat folder deep link &raquo;*

**Layer** : 211

```tl
exportedChatlistInvite#c5181ac flags:# title:string url:string peers:Vector<Peer> = ExportedChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>title</mark> | [`string`](type/string) | Name of the link |
| <mark>url</mark> | [`string`](type/string) | The chat folder deep link » |
| <mark>peers</mark> | [`Vector<Peer>`](type/Peer) | Peers to import |

---

## Type

[ExportedChatlistInvite](type/ExportedChatlistInvite)

---

## Example

```php
$exportedChatlistInvite = $client->exportedChatlistInvite(
	title : 'wZd1eprDAIjP9UYL',
	url : 'https://docs.liveproto.dev',
	peers : array(
		$client->peerUser(
			user_id : 5312436131491535743,
		),
		$client->peerChat(
			chat_id : -7226132012885915212,
		),
		$client->peerChannel(
			channel_id : 779779857721154744,
		),
	),
);
```