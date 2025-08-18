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
	id : 59,
	title : $client->textWithEntities(
		text : 'eKgXzbORvdiQhG6w',
		entities : array(
			$client->messageEntityUnknown(
				offset : 43,
				length : 8,
			),
			$client->messageEntityMention(
				offset : 2,
				length : 19,
			),
			$client->messageEntityHashtag(
				offset : 28,
				length : 45,
			),
			$client->messageEntityBotCommand(
				offset : 31,
				length : 90,
			),
			$client->messageEntityUrl(
				offset : 42,
				length : 66,
			),
			$client->messageEntityEmail(
				offset : 91,
				length : 88,
			),
			$client->messageEntityBold(
				offset : 83,
				length : 50,
			),
			$client->messageEntityItalic(
				offset : 44,
				length : 82,
			),
			$client->messageEntityCode(
				offset : 81,
				length : 10,
			),
			$client->messageEntityPre(
				offset : 82,
				length : 37,
				language : 'JjNauyUz39eKtwD8',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 24,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 46,
				length : 9,
				user_id : 1341827896644266349,
			),
			$client->inputMessageEntityMentionName(
				offset : 78,
				length : 91,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 40,
				length : 26,
			),
			$client->messageEntityCashtag(
				offset : 19,
				length : 24,
			),
			$client->messageEntityUnderline(
				offset : 86,
				length : 28,
			),
			$client->messageEntityStrike(
				offset : 62,
				length : 34,
			),
			$client->messageEntityBankCard(
				offset : 89,
				length : 90,
			),
			$client->messageEntitySpoiler(
				offset : 60,
				length : 50,
			),
			$client->messageEntityCustomEmoji(
				offset : 83,
				length : 59,
				document_id : 2187469500335788829,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 17,
				length : 74,
			),
		),
	),
	emoticon : 'T3NOqmiFS80yojnt',
	color : 96,
	pinned_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -1206347451589896386,
		),
		$client->inputPeerUser(
			user_id : 8964609973491566705,
			access_hash : 1448427470536577724,
		),
		$client->inputPeerChannel(
			channel_id : 2658752172121990243,
			access_hash : -8908876175318397108,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 77,
			user_id : 6578198732145513325,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 76,
			channel_id : -8988217947516669706,
		),
	),
	include_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -523428514473627666,
		),
		$client->inputPeerUser(
			user_id : 2472094983127153489,
			access_hash : 4833305472111030846,
		),
		$client->inputPeerChannel(
			channel_id : 6279222526618684040,
			access_hash : -4221319686609730327,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 63,
			user_id : -5642842160302465249,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 81,
			channel_id : -4976220991966409715,
		),
	),
	exclude_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 5678228208297007535,
		),
		$client->inputPeerUser(
			user_id : -7151205769905195501,
			access_hash : 6366896956331040963,
		),
		$client->inputPeerChannel(
			channel_id : 2925146012756217549,
			access_hash : 1054897499793749688,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 9,
			user_id : 300172272420209085,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 55,
			channel_id : 39280734388248659,
		),
	),
);
```