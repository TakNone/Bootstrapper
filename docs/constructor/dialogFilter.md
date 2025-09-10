# dialogFilter

**Description** : *Dialog filter AKA folder*

**Layer** : 214

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
	id : 44,
	title : $client->textWithEntities(
		text : 'LzC4pcV0KniUXe9I',
		entities : array(
			$client->messageEntityUnknown(
				offset : 30,
				length : 54,
			),
			$client->messageEntityMention(
				offset : 57,
				length : 92,
			),
			$client->messageEntityHashtag(
				offset : 66,
				length : 18,
			),
			$client->messageEntityBotCommand(
				offset : 60,
				length : 69,
			),
			$client->messageEntityUrl(
				offset : 88,
				length : 61,
			),
			$client->messageEntityEmail(
				offset : 2,
				length : 94,
			),
			$client->messageEntityBold(
				offset : 4,
				length : 55,
			),
			$client->messageEntityItalic(
				offset : 63,
				length : 91,
			),
			$client->messageEntityCode(
				offset : 81,
				length : 74,
			),
			$client->messageEntityPre(
				offset : 44,
				length : 55,
				language : 'sbOHBLikTU8W2vAj',
			),
			$client->messageEntityTextUrl(
				offset : 12,
				length : 97,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 80,
				length : 34,
				user_id : 3288883574203527279,
			),
			$client->inputMessageEntityMentionName(
				offset : 55,
				length : 34,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 7,
				length : 76,
			),
			$client->messageEntityCashtag(
				offset : 66,
				length : 60,
			),
			$client->messageEntityUnderline(
				offset : 64,
				length : 97,
			),
			$client->messageEntityStrike(
				offset : 15,
				length : 65,
			),
			$client->messageEntityBankCard(
				offset : 19,
				length : 40,
			),
			$client->messageEntitySpoiler(
				offset : 69,
				length : 24,
			),
			$client->messageEntityCustomEmoji(
				offset : 86,
				length : 41,
				document_id : 1909854837250928492,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 31,
				length : 46,
			),
		),
	),
	emoticon : 'JQC4MXKyju3YbmtV',
	color : 88,
	pinned_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 7057835596824173270,
		),
		$client->inputPeerUser(
			user_id : -7558372078465132615,
			access_hash : 6460385771237460903,
		),
		$client->inputPeerChannel(
			channel_id : 6179820593125355367,
			access_hash : 5817677103414088263,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 65,
			user_id : 7249780287501942872,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 22,
			channel_id : -5112502732354024256,
		),
	),
	include_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -7762918945540802849,
		),
		$client->inputPeerUser(
			user_id : 2265473445784247174,
			access_hash : 1152173795581651443,
		),
		$client->inputPeerChannel(
			channel_id : 3174831757044633014,
			access_hash : -5801158223515025295,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 3,
			user_id : -778648862736280667,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 9,
			channel_id : 8121787876496835310,
		),
	),
	exclude_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 4730340822473699225,
		),
		$client->inputPeerUser(
			user_id : 6034379620340929359,
			access_hash : -4137456914339548849,
		),
		$client->inputPeerChannel(
			channel_id : -9053656030659282295,
			access_hash : -591945460155933654,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 90,
			user_id : 8156952811329084615,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 96,
			channel_id : -1490741476131765240,
		),
	),
);
```