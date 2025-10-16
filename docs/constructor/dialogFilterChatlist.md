# dialogFilterChatlist

**Description** : *A folder imported using a chat folder deep link &raquo;*

**Layer** : 216

```tl
dialogFilterChatlist#96537bd7 flags:# has_my_invites:flags.26?true title_noanimate:flags.28?true id:int title:TextWithEntities emoticon:flags.25?string color:flags.27?int pinned_peers:Vector<InputPeer> include_peers:Vector<InputPeer> = DialogFilter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_my_invites** | [`flags.26?true`](type/true) | Whether the current user has created some chat folder deep links » to share the folder as well |
| **title_noanimate** | [`flags.28?true`](type/true) | If set, any animated emojis present in title should not be animated and should be instead frozen on the first frame |
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
	id : 53,
	title : $client->textWithEntities(
		text : 't18zvpmDIO5c2Mgf',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 70,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 35,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 97,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 33,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 58,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 65,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 38,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 80,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 49,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 0,
				language : '3wBpWaGHVOofSli0',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 65,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 72,
				user_id : -7718338506835752989,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 2,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 50,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 85,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 89,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 10,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 31,
				document_id : -4100124004304985428,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 54,
			),
		),
	),
	emoticon : 'UpCMg2VOyt4lDx5Z',
	color : 60,
	pinned_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -3670174276977036233,
		),
		$client->inputPeerUser(
			user_id : -3290331436778392342,
			access_hash : -6553149982194204164,
		),
		$client->inputPeerChannel(
			channel_id : 7430754579655103708,
			access_hash : -5808544306639193781,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 86,
			user_id : 89135364033648598,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 53,
			channel_id : 8302572855449810029,
		),
	),
	include_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -9179261887456178947,
		),
		$client->inputPeerUser(
			user_id : -1299544817078668586,
			access_hash : 7925095033658320747,
		),
		$client->inputPeerChannel(
			channel_id : 8421058373531230093,
			access_hash : -4949228047963801171,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 21,
			user_id : -4844229049846127816,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 67,
			channel_id : 7689700576277445537,
		),
	),
);
```