# exportedChatlistInvite

**Description** : *Exported chat folder deep link &raquo;*

**Layer** : 222

```tl
exportedChatlistInvite#c5181ac flags:# title:string url:string peers:Vector<Peer> = ExportedChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	title : 'YjLPyTsCatZhw4BE',
	url : 'https://docs.liveproto.dev',
	peers : array(
		$client->peerUser(
			user_id : 5711844710013247016,
		),
		$client->peerChat(
			chat_id : -2527342024685981190,
		),
		$client->peerChannel(
			channel_id : -224500452503128822,
		),
	),
);
```