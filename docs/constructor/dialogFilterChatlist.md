# dialogFilterChatlist

**Description** : *A folder imported using a chat folder deep link &raquo;*

**Layer** : 229

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
	id : 67,
	title : $client->textWithEntities(
		text : '8LogzE7cX6fQNFVt',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 69,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 98,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 49,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 11,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 45,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 93,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 0,
				language : 'wNzcsmUoQJil36TK',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 35,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 53,
				user_id : -3007331032449512671,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 34,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 35,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 93,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 24,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 57,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 37,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 80,
				document_id : 1583992928070383296,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 57,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 19,
				date : 16,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 89,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 49,
				old_text : 'jR9AqGu2XxtcywsS',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 67,
			),
		),
	),
	emoticon : 'GHkvbK2McRjn3ghS',
	color : 66,
	pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
);
```