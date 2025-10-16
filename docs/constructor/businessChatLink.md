# businessChatLink

**Description** : *Contains info about a business chat deep link &raquo; created by the current account*

**Layer** : 216

```tl
businessChatLink#b4ae666f flags:# link:string message:string entities:flags.0?Vector<MessageEntity> title:flags.1?string views:int = BusinessChatLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>link</mark> | [`string`](type/string) | Business chat deep link |
| <mark>message</mark> | [`string`](type/string) | Message to pre-fill in the message input field |
| **entities** | [`flags.0?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **title** | [`flags.1?string`](type/string) | Human-readable name of the link, to simplify management in the UI (only visible to the creator of the link) |
| <mark>views</mark> | [`int`](type/int) | Number of times the link was resolved (clicked/scanned/etc...) |

---

## Type

[BusinessChatLink](type/BusinessChatLink)

---

## Example

```php
$businessChatLink = $client->businessChatLink(
	link : '6T9k1dmuVUcgfWb5',
	message : 'gGFjAZUaCpldoqyh',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 95,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 71,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 20,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 40,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 24,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 69,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 24,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 33,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 92,
			language : 'C9N6olL7xQePScVi',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 65,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 44,
			user_id : 3248312908978226365,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 95,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 81,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 87,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 62,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 82,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 93,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 96,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 56,
			document_id : -2175234508265805599,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 39,
		),
	),
	title : 'rMzkKfiDAeVCb2Qa',
	views : 50,
);
```