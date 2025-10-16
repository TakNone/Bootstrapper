# dialogFilter

**Description** : *Dialog filter AKA folder*

**Layer** : 216

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
	id : 11,
	title : $client->textWithEntities(
		text : 'PyEaj6Lm7OWBRfwt',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 18,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 20,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 90,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 67,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 57,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 35,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 23,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 94,
				language : 'tMO2plcTrfUXouVR',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 11,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 91,
				user_id : 325908253223669387,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 30,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 7,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 7,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 12,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 91,
				document_id : 6633399938576367220,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 9,
			),
		),
	),
	emoticon : 'qAKZJ46OMTQxBeHh',
	color : 26,
	pinned_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 8906931818927767743,
		),
		$client->inputPeerUser(
			user_id : -5242200111610025299,
			access_hash : 8056468091622460445,
		),
		$client->inputPeerChannel(
			channel_id : -1028601454101388151,
			access_hash : -2420061846443885487,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 84,
			user_id : -8011613321960452894,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 57,
			channel_id : 2808199164877628425,
		),
	),
	include_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -4099808334946440214,
		),
		$client->inputPeerUser(
			user_id : -1326057879819911885,
			access_hash : -1514022764695355758,
		),
		$client->inputPeerChannel(
			channel_id : 2433328004068018697,
			access_hash : 2931420432945769040,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 49,
			user_id : -30114985163327191,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 41,
			channel_id : 8015727457039749090,
		),
	),
	exclude_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 1947798145305140347,
		),
		$client->inputPeerUser(
			user_id : -1325949504394016224,
			access_hash : -4269190855975630044,
		),
		$client->inputPeerChannel(
			channel_id : -7814741998723682832,
			access_hash : 1524529741737253053,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 21,
			user_id : 272487164324645801,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 29,
			channel_id : -3649519333855665713,
		),
	),
);
```