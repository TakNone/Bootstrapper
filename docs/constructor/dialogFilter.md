# dialogFilter

**Description** : *Dialog filter AKA folder*

**Layer** : 211

```tl
dialogFilter#aa472651 flags:# contacts:flags.0?true non_contacts:flags.1?true groups:flags.2?true broadcasts:flags.3?true bots:flags.4?true exclude_muted:flags.11?true exclude_read:flags.12?true exclude_archived:flags.13?true title_noanimate:flags.28?true id:int title:TextWithEntities emoticon:flags.25?string color:flags.27?int pinned_peers:Vector<InputPeer> include_peers:Vector<InputPeer> exclude_peers:Vector<InputPeer> = DialogFilter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **contacts** | [`flags.0?true`](type/true) | Whether to include all contacts in this folder |
| **non_contacts** | [`flags.1?true`](type/true) | Whether to include all non-contacts in this folder |
| **groups** | [`flags.2?true`](type/true) | Whether to include all groups in this folder |
| **broadcasts** | [`flags.3?true`](type/true) | Whether to include all channels in this folder |
| **bots** | [`flags.4?true`](type/true) | Whether to include all bots in this folder |
| **exclude_muted** | [`flags.11?true`](type/true) | Whether to exclude muted chats from this folder |
| **exclude_read** | [`flags.12?true`](type/true) | Whether to exclude read chats from this folder |
| **exclude_archived** | [`flags.13?true`](type/true) | Whether to exclude archived chats from this folder |
| **title_noanimate** | [`flags.28?true`](type/true) | NOTHING |
| <mark>id</mark> | [`int`](type/int) | Folder ID |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | Folder name (max 12 UTF-8 chars) |
| **emoticon** | [`flags.25?string`](type/string) | Emoji to use as icon for the folder |
| **color** | [`flags.27?int`](type/int) | A color ID for the folder tag associated to this folder, see here » for more info |
| <mark>pinned_peers</mark> | [`Vector<InputPeer>`](type/InputPeer) | Pinned chats, folders can have unlimited pinned chats |
| <mark>include_peers</mark> | [`Vector<InputPeer>`](type/InputPeer) | Include the following chats in this folder |
| <mark>exclude_peers</mark> | [`Vector<InputPeer>`](type/InputPeer) | Exclude the following chats from this folder |

---

## Type

[DialogFilter](type/DialogFilter)

---

## Example

```php
$dialogFilter = $client->dialogFilter(
	contacts : true,
	non_contacts : true,
	groups : true,
	broadcasts : true,
	bots : true,
	exclude_muted : true,
	exclude_read : true,
	exclude_archived : true,
	title_noanimate : true,
	id : 25,
	title : $client->textWithEntities(
		text : 'ywagk60chD5Z7VOY',
		entities : array(
			$client->messageEntityUnknown(
				offset : 90,
				length : 100,
			),
			$client->messageEntityMention(
				offset : 36,
				length : 25,
			),
			$client->messageEntityHashtag(
				offset : 79,
				length : 29,
			),
			$client->messageEntityBotCommand(
				offset : 44,
				length : 79,
			),
			$client->messageEntityUrl(
				offset : 50,
				length : 50,
			),
			$client->messageEntityEmail(
				offset : 18,
				length : 10,
			),
			$client->messageEntityBold(
				offset : 47,
				length : 66,
			),
			$client->messageEntityItalic(
				offset : 45,
				length : 15,
			),
			$client->messageEntityCode(
				offset : 35,
				length : 85,
			),
			$client->messageEntityPre(
				offset : 33,
				length : 50,
				language : 'BvfhFsW5XkwyOjST',
			),
			$client->messageEntityTextUrl(
				offset : 54,
				length : 35,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 26,
				length : 68,
				user_id : -8928872882878583300,
			),
			$client->inputMessageEntityMentionName(
				offset : 35,
				length : 87,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 1,
				length : 30,
			),
			$client->messageEntityCashtag(
				offset : 29,
				length : 54,
			),
			$client->messageEntityUnderline(
				offset : 60,
				length : 56,
			),
			$client->messageEntityStrike(
				offset : 21,
				length : 59,
			),
			$client->messageEntityBankCard(
				offset : 21,
				length : 1,
			),
			$client->messageEntitySpoiler(
				offset : 63,
				length : 18,
			),
			$client->messageEntityCustomEmoji(
				offset : 94,
				length : 66,
				document_id : -7365189433124746779,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 13,
				length : 39,
			),
		),
	),
	emoticon : 'wulFaWPKhSz6nVpg',
	color : 6,
	pinned_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -1654313419387360682,
		),
		$client->inputPeerUser(
			user_id : -1438764440870122848,
			access_hash : 7516669730983056172,
		),
		$client->inputPeerChannel(
			channel_id : -673820149924728117,
			access_hash : -7620561531290881222,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 98,
			user_id : 5121771072555615796,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 67,
			channel_id : 6598782158642501587,
		),
	),
	include_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 2926821419080485408,
		),
		$client->inputPeerUser(
			user_id : 6109036845107567451,
			access_hash : 4324874557244473058,
		),
		$client->inputPeerChannel(
			channel_id : -5489514364627641932,
			access_hash : -8850602140539411184,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 62,
			user_id : 5795660523575944148,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 36,
			channel_id : 752423775623850914,
		),
	),
	exclude_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 1850738292393435597,
		),
		$client->inputPeerUser(
			user_id : -4989149269976448924,
			access_hash : -4733286192061523902,
		),
		$client->inputPeerChannel(
			channel_id : 8631684871439767883,
			access_hash : -5964425097961167719,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 4,
			user_id : -8184935137685118081,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 65,
			channel_id : -2630013075141428253,
		),
	),
);
```