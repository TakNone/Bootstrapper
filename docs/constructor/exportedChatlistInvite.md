# exportedChatlistInvite

**Description** : *Exported chat folder deep link &raquo;*

**Layer** : 227

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
	title : 'I3CwxtgsvfyJlzO2',
	url : 'https://docs.liveproto.dev',
	peers : array(
		$client->peerUser(
			user_id : 1360523028949327539,
		),
		$client->peerChat(
			chat_id : -2316042179955610254,
		),
		$client->peerChannel(
			channel_id : 1719788739117576008,
		),
	),
);
```