# businessChatLink

**Description** : *Contains info about a business chat deep link &raquo; created by the current account*

**Layer** : 222

```tl
businessChatLink#b4ae666f flags:# link:string message:string entities:flags.0?Vector<MessageEntity> title:flags.1?string views:int = BusinessChatLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	link : 'DNadYoGq4FgUprHL',
	message : 'CzL0dsuTIrPFUZeW',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 97,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 49,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 31,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 98,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 21,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 1,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 5,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 70,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 35,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 57,
			language : 'TRzpUAcOjlrL5kv6',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 7,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 79,
			user_id : -420589440620838758,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 56,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 91,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 49,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 89,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 33,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 75,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 43,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 32,
			document_id : -4181067530463177915,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 48,
		),
	),
	title : 'Hu0rxGFqAd25ZWSR',
	views : 17,
);
```