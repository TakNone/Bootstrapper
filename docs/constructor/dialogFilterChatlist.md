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
	id : 11,
	title : $client->textWithEntities(
		text : 'ZfTYgs59pbz6Kj7c',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 73,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 26,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 9,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 38,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 63,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 89,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 13,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 60,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 73,
				language : 'n0GQI2SXLTCJepBE',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 29,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 57,
				user_id : -5550163939440923149,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 23,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 24,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 7,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 52,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 59,
				document_id : -6073024545924279341,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 43,
			),
		),
	),
	emoticon : 'mqLVpJXyCdZE6Qkn',
	color : 83,
	pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
);
```