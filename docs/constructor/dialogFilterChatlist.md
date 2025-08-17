# dialogFilterChatlist

**Description** : *A folder imported using a chat folder deep link »*

**Layer** : 211

```tl
dialogFilterChatlist#96537bd7 flags:# has_my_invites:flags.26?true title_noanimate:flags.28?true id:int title:TextWithEntities emoticon:flags.25?string color:flags.27?int pinned_peers:Vector<InputPeer> include_peers:Vector<InputPeer> = DialogFilter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_my_invites** | [`flags.26?true`](type/true) | Whether the current user has created some chat folder deep links » to share the folder as well |
| **title_noanimate** | [`flags.28?true`](type/true) | NOTHING |
| <mark>id</mark> | [`int`](type/int) | ID of the folder |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | Name of the folder (max 12 UTF-8 chars) |
| **emoticon** | [`flags.25?string`](type/string) | Emoji to use as icon for the folder |
| **color** | [`flags.27?int`](type/int) | A color ID for the folder tag associated to this folder, see here » for more info |
| <mark>pinned_peers</mark> | [`Vector<InputPeer>`](type/InputPeer) | Pinned chats, folders can have unlimited pinned chats |
| <mark>include_peers</mark> | [`Vector<InputPeer>`](type/InputPeer) | Chats to include in the folder |

---

## Type

[DialogFilter](type/DialogFilter)

---

## Example

```php
$dialogFilter = $client->dialogFilterChatlist(
	has_my_invites : true,
	title_noanimate : true,
	id : 78,
	title : $client->textWithEntities(
		text : 'GAi87rb5tT6oyesW',
		entities : array(
			$client->messageEntityUnknown(
				offset : 18,
				length : 73,
			),
			$client->messageEntityMention(
				offset : 80,
				length : 31,
			),
			$client->messageEntityHashtag(
				offset : 100,
				length : 45,
			),
			$client->messageEntityBotCommand(
				offset : 65,
				length : 61,
			),
			$client->messageEntityUrl(
				offset : 74,
				length : 20,
			),
			$client->messageEntityEmail(
				offset : 58,
				length : 64,
			),
			$client->messageEntityBold(
				offset : 86,
				length : 62,
			),
			$client->messageEntityItalic(
				offset : 92,
				length : 19,
			),
			$client->messageEntityCode(
				offset : 90,
				length : 62,
			),
			$client->messageEntityPre(
				offset : 18,
				length : 82,
				language : '2DMQnuHEsviBbFXx',
			),
			$client->messageEntityTextUrl(
				offset : 59,
				length : 20,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 77,
				length : 96,
				user_id : -5977268402232869990,
			),
			$client->inputMessageEntityMentionName(
				offset : 89,
				length : 22,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 46,
				length : 82,
			),
			$client->messageEntityCashtag(
				offset : 45,
				length : 8,
			),
			$client->messageEntityUnderline(
				offset : 29,
				length : 91,
			),
			$client->messageEntityStrike(
				offset : 38,
				length : 84,
			),
			$client->messageEntityBankCard(
				offset : 55,
				length : 36,
			),
			$client->messageEntitySpoiler(
				offset : 72,
				length : 79,
			),
			$client->messageEntityCustomEmoji(
				offset : 34,
				length : 23,
				document_id : -7583014279392641574,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 85,
				length : 64,
			),
		),
	),
	emoticon : '5Csrkj0oMT1bNYLP',
	color : 20,
	pinned_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -6495235501805755814,
		),
		$client->inputPeerUser(
			user_id : 4340585980756749745,
			access_hash : -4384147502747606622,
		),
		$client->inputPeerChannel(
			channel_id : 6409745608136028319,
			access_hash : 3487620727442633104,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 48,
			user_id : 5489096503092503379,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 7,
			channel_id : -8196553652522774765,
		),
	),
	include_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 6916525409653806420,
		),
		$client->inputPeerUser(
			user_id : -28935922384955176,
			access_hash : -1395874062787081538,
		),
		$client->inputPeerChannel(
			channel_id : -1645290812587233617,
			access_hash : 4206975833354748093,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 7,
			user_id : 4870197021310269898,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 13,
			channel_id : 1773083391333068166,
		),
	),
);
```