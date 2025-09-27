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
	id : 79,
	title : $client->textWithEntities(
		text : 'mHnDxg0KoLhidzEF',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 68,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 27,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 9,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 53,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 48,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 57,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 27,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 17,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 28,
				language : 'WOH3ayb9Ph2vxsSL',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 31,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 86,
				user_id : -3417891500991089464,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 71,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 83,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 53,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 2,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 87,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 55,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 11,
				document_id : 8964645389185566750,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 10,
			),
		),
	),
	emoticon : 'TPtFyZ6RqjSdIe4f',
	color : 78,
	pinned_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -2828018831131438243,
		),
		$client->inputPeerUser(
			user_id : -7239427475550710407,
			access_hash : -666729260267536098,
		),
		$client->inputPeerChannel(
			channel_id : -6105307873832659778,
			access_hash : 1467017110478754888,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 60,
			user_id : 1448433104752502350,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 31,
			channel_id : -5339972945237226936,
		),
	),
	include_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -1091335154282572101,
		),
		$client->inputPeerUser(
			user_id : 2861174774352725143,
			access_hash : 2745449421509518647,
		),
		$client->inputPeerChannel(
			channel_id : 2146555287213240590,
			access_hash : -5612621942734312758,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 98,
			user_id : -7652638503030119868,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 49,
			channel_id : 2088636386267348952,
		),
	),
	exclude_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 4615202106414123824,
		),
		$client->inputPeerUser(
			user_id : -1745223307621949482,
			access_hash : 752656040584834904,
		),
		$client->inputPeerChannel(
			channel_id : -7963091441607736338,
			access_hash : 7353707950908974080,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 86,
			user_id : -6750271756812479110,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 51,
			channel_id : 3756763823033472374,
		),
	),
);
```