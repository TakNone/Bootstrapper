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
	id : 452704375790640730,
	access_hash : 4278974795829634445,
	slug : 'vK62rJpuc41FP8SZ',
	title : 'Ee3vZwt4os1PHJhu',
	emoji_id : -4274179295644902770,
	prompt : 'pMwQE0vCiZPgKOxe',
	installs_count : 12,
	author_id : 4924636004004034582,
	example_english : $client->aiComposeToneExample(
		from : $client->textWithEntities(
			text : '8HlTe5zdkjtagU32',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 17,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 2,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 80,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 64,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 33,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 70,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 42,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 24,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 39,
					language : 'z2jBsAcNMIDxPieu',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 84,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 62,
					user_id : 5126048016671228424,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 4,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 34,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 41,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 20,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 96,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 3,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 90,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 84,
					document_id : 1063935216654854757,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 92,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 92,
					date : 2,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 93,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 28,
					old_text : '2MPv3sQD5bw9z7RB',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 83,
				),
			),
		),
		to : $client->textWithEntities(
			text : 'NATL3sSi5DMpOQ0J',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 91,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 7,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 41,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 41,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 97,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 85,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 74,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 92,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 17,
					language : 'EnWc5iI0vUxD28NC',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 72,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 41,
					user_id : -1501717612189858982,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 78,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 55,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 21,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 5,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 29,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 89,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 45,
					document_id : -4305750847093412527,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 41,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 37,
					date : 10,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 11,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 42,
					old_text : 'JAIWxMizCTsKh7jQ',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 25,
				),
			),
		),
	),
);
```