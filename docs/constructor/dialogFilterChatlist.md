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
	id : 11,
	title : $client->textWithEntities(
		text : 'OTjR16nvXzFkWc7x',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 37,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 49,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 83,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 73,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 40,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 21,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 36,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 26,
				language : 'WZcpLHmw26iAveO9',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 97,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 22,
				user_id : 8844660066932247898,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 16,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 89,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 54,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 3,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 70,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 81,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 100,
				document_id : -7017063023565594181,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 77,
			),
		),
	),
	emoticon : 'q5tNhgiCdc3JExeQ',
	color : 19,
	pinned_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -5976094711109174673,
		),
		$client->inputPeerUser(
			user_id : 2699676807907505832,
			access_hash : -5058425162836490246,
		),
		$client->inputPeerChannel(
			channel_id : 3287985351373171680,
			access_hash : -7081377608577363125,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 50,
			user_id : 5158953491437416118,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 93,
			channel_id : 2842624242376090352,
		),
	),
	include_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -8884594740769647875,
		),
		$client->inputPeerUser(
			user_id : -2024505351941532353,
			access_hash : 1123782543426507322,
		),
		$client->inputPeerChannel(
			channel_id : -1031443854996845187,
			access_hash : 3515657674193239910,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 56,
			user_id : 3536040046320790390,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 56,
			channel_id : -4245817287227059182,
		),
	),
);
```