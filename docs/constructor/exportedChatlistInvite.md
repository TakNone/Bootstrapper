# exportedChatlistInvite

**Description** : *Exported chat folder deep link &raquo;*

**Layer** : 229

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
	title : 'r6XAqsDCmaNzFTUO',
	url : 'https://docs.liveproto.dev',
	peers : array(
		$client->peerUser(
			user_id : -3011995014416077266,
		),
		$client->peerChat(
			chat_id : -5405001670600906499,
		),
		$client->peerChannel(
			channel_id : -8036305236247752419,
		),
	),
);
```