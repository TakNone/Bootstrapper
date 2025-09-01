# dialogFilterChatlist

**Description** : *A folder imported using a chat folder deep link &raquo;*

**Layer** : 214

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
	id : 2,
	title : $client->textWithEntities(
		text : 'FLSrgitbYUaxXhQp',
		entities : array(
			$client->messageEntityUnknown(
				offset : 60,
				length : 10,
			),
			$client->messageEntityMention(
				offset : 7,
				length : 95,
			),
			$client->messageEntityHashtag(
				offset : 17,
				length : 30,
			),
			$client->messageEntityBotCommand(
				offset : 8,
				length : 13,
			),
			$client->messageEntityUrl(
				offset : 58,
				length : 97,
			),
			$client->messageEntityEmail(
				offset : 75,
				length : 80,
			),
			$client->messageEntityBold(
				offset : 52,
				length : 42,
			),
			$client->messageEntityItalic(
				offset : 85,
				length : 6,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 41,
			),
			$client->messageEntityPre(
				offset : 33,
				length : 84,
				language : 'B2MTV4jY9noU1fLi',
			),
			$client->messageEntityTextUrl(
				offset : 95,
				length : 45,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 13,
				length : 5,
				user_id : 5739260308191495751,
			),
			$client->inputMessageEntityMentionName(
				offset : 28,
				length : 51,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 56,
				length : 35,
			),
			$client->messageEntityCashtag(
				offset : 48,
				length : 11,
			),
			$client->messageEntityUnderline(
				offset : 36,
				length : 29,
			),
			$client->messageEntityStrike(
				offset : 26,
				length : 41,
			),
			$client->messageEntityBankCard(
				offset : 38,
				length : 69,
			),
			$client->messageEntitySpoiler(
				offset : 43,
				length : 91,
			),
			$client->messageEntityCustomEmoji(
				offset : 25,
				length : 42,
				document_id : -6724130732399471261,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 79,
				length : 47,
			),
		),
	),
	emoticon : 'FMCcr84W5xal0Xwh',
	color : 80,
	pinned_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -612054329524395554,
		),
		$client->inputPeerUser(
			user_id : -656582171698457776,
			access_hash : -1271808833276130717,
		),
		$client->inputPeerChannel(
			channel_id : 1240720296264924434,
			access_hash : 7523691281314318313,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 14,
			user_id : -2808146182582231862,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 41,
			channel_id : -809489918696906992,
		),
	),
	include_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 5577337221369752641,
		),
		$client->inputPeerUser(
			user_id : 6121122475195228692,
			access_hash : -5802998937193859217,
		),
		$client->inputPeerChannel(
			channel_id : 4295182637894860050,
			access_hash : -1316540633449041368,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 14,
			user_id : 3077777161486686931,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 90,
			channel_id : -1181739583563628995,
		),
	),
);
```