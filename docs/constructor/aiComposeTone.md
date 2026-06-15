# aiComposeTone

**Layer** : 227

```tl
aiComposeTone#cff63ea9 flags:# creator:flags.0?true id:long access_hash:long slug:string title:string emoji_id:flags.1?long prompt:flags.4?string installs_count:flags.2?int author_id:flags.3?long example_english:flags.5?AiComposeToneExample = AiComposeTone;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **creator** | [`flags.0?true`](type/true) | NOTHING |
| <mark>id</mark> | [`long`](type/long) | NOTHING |
| <mark>access_hash</mark> | [`long`](type/long) | NOTHING |
| <mark>slug</mark> | [`string`](type/string) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | NOTHING |
| **emoji_id** | [`flags.1?long`](type/long) | NOTHING |
| **prompt** | [`flags.4?string`](type/string) | NOTHING |
| **installs_count** | [`flags.2?int`](type/int) | NOTHING |
| **author_id** | [`flags.3?long`](type/long) | NOTHING |
| **example_english** | [`flags.5?AiComposeToneExample`](type/AiComposeToneExample) | NOTHING |

---

## Type

[AiComposeTone](type/AiComposeTone)

---

## Example

```php
$aiComposeTone = $client->aiComposeTone(
	creator : true,
	id : -571726088903337940,
	access_hash : -341484808513479963,
	slug : 'vMjoTICUegVyQRDF',
	title : 'WNHDCoyz3sJwdaI5',
	emoji_id : 7489822137416384874,
	prompt : 'MgeJ7D63qL9fZ1s8',
	installs_count : 20,
	author_id : -148788948113376642,
	example_english : $client->aiComposeToneExample(
		from : $client->textWithEntities(
			text : 'I2Kh0BEm1l4CLd8Q',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 71,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 32,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 71,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 60,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 46,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 6,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 5,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 92,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 31,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 22,
					language : '4x5eOHPDUQziawkf',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 27,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : 3941712213977538707,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 95,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 67,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 80,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 77,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 12,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 46,
					document_id : -3192556644409036854,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 69,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 29,
					date : 29,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 54,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 61,
					old_text : 'AUomRLQza5scEYk0',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 96,
				),
			),
		),
		to : $client->textWithEntities(
			text : 'a1iukNOj3KDHhXL8',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 72,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 45,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 40,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 21,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 11,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 75,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 73,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 85,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 19,
					language : 'iuY4Hc9SRjPfBTl3',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 40,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 65,
					user_id : 3610259529580832264,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 86,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 74,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 49,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 8,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 78,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 86,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 78,
					document_id : 459868180299845657,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 24,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 12,
					date : 97,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 53,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 48,
					old_text : 'fgDMzZbKBPlL9Wy4',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 67,
				),
			),
		),
	),
);
```