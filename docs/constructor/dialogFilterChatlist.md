# dialogFilterChatlist

**Description** : *A folder imported using a chat folder deep link &raquo;*

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
	id : 52,
	title : $client->textWithEntities(
		text : 'DYnygFTNJL5eRxS4',
		entities : array(
			$client->messageEntityUnknown(
				offset : 50,
				length : 63,
			),
			$client->messageEntityMention(
				offset : 27,
				length : 26,
			),
			$client->messageEntityHashtag(
				offset : 91,
				length : 59,
			),
			$client->messageEntityBotCommand(
				offset : 35,
				length : 62,
			),
			$client->messageEntityUrl(
				offset : 77,
				length : 38,
			),
			$client->messageEntityEmail(
				offset : 2,
				length : 56,
			),
			$client->messageEntityBold(
				offset : 74,
				length : 14,
			),
			$client->messageEntityItalic(
				offset : 96,
				length : 76,
			),
			$client->messageEntityCode(
				offset : 55,
				length : 22,
			),
			$client->messageEntityPre(
				offset : 39,
				length : 53,
				language : 'ij7d5oNDkU6eLpPR',
			),
			$client->messageEntityTextUrl(
				offset : 94,
				length : 61,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 98,
				length : 81,
				user_id : 1603674993155369674,
			),
			$client->inputMessageEntityMentionName(
				offset : 30,
				length : 86,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 94,
				length : 100,
			),
			$client->messageEntityCashtag(
				offset : 83,
				length : 97,
			),
			$client->messageEntityUnderline(
				offset : 59,
				length : 13,
			),
			$client->messageEntityStrike(
				offset : 6,
				length : 11,
			),
			$client->messageEntityBankCard(
				offset : 55,
				length : 21,
			),
			$client->messageEntitySpoiler(
				offset : 66,
				length : 9,
			),
			$client->messageEntityCustomEmoji(
				offset : 98,
				length : 82,
				document_id : 7556329148353676378,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 1,
				length : 89,
			),
		),
	),
	emoticon : 'jo4PsNQapDfzS7hr',
	color : 67,
	pinned_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 7136090920623891207,
		),
		$client->inputPeerUser(
			user_id : 1051165231002088285,
			access_hash : -3251777232096031792,
		),
		$client->inputPeerChannel(
			channel_id : -906658374056609093,
			access_hash : 79109778657091179,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 44,
			user_id : -6624318166895275112,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 67,
			channel_id : 765840829755394852,
		),
	),
	include_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -6311690719715768304,
		),
		$client->inputPeerUser(
			user_id : 8380140584310521262,
			access_hash : 261448512558058308,
		),
		$client->inputPeerChannel(
			channel_id : -7292003203515256340,
			access_hash : -2397969834382601668,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 70,
			user_id : 370528527695014166,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 33,
			channel_id : 551034981250092070,
		),
	),
);
```