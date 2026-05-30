# aiComposeTone

**Layer** : 225

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
	id : -8449538094942118160,
	access_hash : -8639376425351043073,
	slug : 'JHKAGbze9Yw8QDcf',
	title : 'QLcoFvym3KgE1zwb',
	emoji_id : 3801390877640343352,
	prompt : 'jZbpeD3i9mPBwWgf',
	installs_count : 81,
	author_id : -5668141274001974963,
	example_english : $client->aiComposeToneExample(
		from : $client->textWithEntities(
			text : 'EX02uO5p34aNPtVS',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 78,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 61,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 64,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 20,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 4,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 36,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 41,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 20,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 49,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 32,
					language : '4byLoNugjvkxI1qe',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 81,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 2,
					user_id : 1516088123149336987,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 14,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 24,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 18,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 6,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 15,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 42,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 85,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 1,
					document_id : -7820116718849376303,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 74,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 5,
					date : 20,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 38,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 89,
					old_text : 'py5XfIE8B0Oh2mMW',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 57,
				),
			),
		),
		to : $client->textWithEntities(
			text : 'DIOsaSVK3Utem12T',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 89,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 16,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 79,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 51,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 67,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 70,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 32,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 61,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 57,
					language : 'UtJdObQRBx3NH8Xa',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 87,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 9,
					user_id : 2546491095028325411,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 46,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 1,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 34,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 7,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 69,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 27,
					document_id : -6917888080845706427,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 4,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 3,
					date : 70,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 85,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 87,
					old_text : 'rUpQkjtVubOK3g9e',
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