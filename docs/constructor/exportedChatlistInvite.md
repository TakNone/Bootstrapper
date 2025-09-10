# exportedChatlistInvite

**Description** : *Exported chat folder deep link &raquo;*

**Layer** : 214

```tl
exportedChatlistInvite#c5181ac flags:# revoked:flags.0?true title:string url:string peers:Vector<Peer> = ExportedChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **revoked** | [`flags.0?true`](type/true) | NOTHING |
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
	revoked : true,
	title : 'KralbdMERUOfZBum',
	url : 'https://docs.liveproto.dev',
	peers : array(
		$client->peerUser(
			user_id : 8459912914775575058,
		),
		$client->peerChat(
			chat_id : 2015153977973810114,
		),
		$client->peerChannel(
			channel_id : -7075030863638619777,
		),
	),
);
```