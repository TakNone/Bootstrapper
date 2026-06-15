# dialogFilter

**Description** : *Dialog filter AKA folder*

**Layer** : 227

```tl
dialogFilter#aa472651 flags:# contacts:flags.0?true non_contacts:flags.1?true groups:flags.2?true broadcasts:flags.3?true bots:flags.4?true exclude_muted:flags.11?true exclude_read:flags.12?true exclude_archived:flags.13?true title_noanimate:flags.28?true id:int title:TextWithEntities emoticon:flags.25?string color:flags.27?int pinned_peers:Vector<InputPeer> include_peers:Vector<InputPeer> exclude_peers:Vector<InputPeer> = DialogFilter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **contacts** | [`flags.0?true`](type/true) | Whether to include all contacts in this folder |
| **non_contacts** | [`flags.1?true`](type/true) | Whether to include all non-contacts in this folder |
| **groups** | [`flags.2?true`](type/true) | Whether to include all groups in this folder |
| **broadcasts** | [`flags.3?true`](type/true) | Whether to include all channels in this folder |
| **bots** | [`flags.4?true`](type/true) | Whether to include all bots in this folder |
| **exclude_muted** | [`flags.11?true`](type/true) | Whether to exclude muted chats from this folder |
| **exclude_read** | [`flags.12?true`](type/true) | Whether to exclude read chats from this folder |
| **exclude_archived** | [`flags.13?true`](type/true) | Whether to exclude archived chats from this folder |
| **title_noanimate** | [`flags.28?true`](type/true) | If set, any animated emojis present in title should not be animated and should be instead frozen on the first frame |
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
	id : 9,
	title : $client->textWithEntities(
		text : 'sJlMautNkSF5U9DP',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 44,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 76,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 29,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 4,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 49,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 29,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 30,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 90,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 13,
				language : 'J2NsCYrBIt1VFuEl',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 81,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 35,
				user_id : -3509519108012236843,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 9,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 86,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 38,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 21,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 50,
				document_id : 7337886489937235666,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 56,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 96,
				date : 45,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 33,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 37,
				old_text : 'o9s0vSXfiDB5P6le',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 10,
			),
		),
	),
	emoticon : '2JMVtW1xwH4qDPj8',
	color : 63,
	pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
);
```