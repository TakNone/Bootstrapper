# dialogFilterChatlist

**Description** : *A folder imported using a chat folder deep link &raquo;*

**Layer** : 222

```tl
dialogFilterChatlist#96537bd7 flags:# has_my_invites:flags.26?true title_noanimate:flags.28?true id:int title:TextWithEntities emoticon:flags.25?string color:flags.27?int pinned_peers:Vector<InputPeer> include_peers:Vector<InputPeer> = DialogFilter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 38,
	title : $client->textWithEntities(
		text : 'u7H1JMVoWa4tFI2d',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 61,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 76,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 96,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 2,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 86,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 41,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 29,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 78,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 94,
				language : 'AMEGj4ia5FbYucBp',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 75,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 84,
				user_id : 8896706224880250657,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 27,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 29,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 70,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 14,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 88,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 26,
				document_id : 8073260743733785515,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 16,
			),
		),
	),
	emoticon : 'uMYK7Xcri4EZ2TRk',
	color : 76,
	pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
);
```