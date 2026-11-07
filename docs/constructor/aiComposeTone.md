# aiComposeTone

**Description** : *A custom AI composer tone &raquo;, used to rephrase messages in a specific style with the AI message composer*

**Layer** : 233

```tl
aiComposeTone#cff63ea9 flags:# creator:flags.0?true id:long access_hash:long slug:string title:string emoji_id:flags.1?long prompt:flags.4?string installs_count:flags.2?int author_id:flags.3?long example_english:flags.5?AiComposeToneExample = AiComposeTone;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **creator** | [`flags.0?true`](type/true) | Whether the current user is the creator of this tone |
| <mark>id</mark> | [`long`](type/long) | Tone identifier |
| <mark>access_hash</mark> | [`long`](type/long) | Tone access hash |
| <mark>slug</mark> | [`string`](type/string) | Unique tone slug, used to share and install the tone via AI compose tone links » |
| <mark>title</mark> | [`string`](type/string) | Human-readable tone name, up to aicompose_tone_title_length_max » UTF-8 characters long |
| **emoji_id** | [`flags.1?long`](type/long) | Custom emoji ID of the tone's icon |
| **prompt** | [`flags.4?string`](type/string) | The prompt that describes how the AI should rephrase messages using this tone, up to aicompose_tone_prompt_length_max » UTF-8 characters long; only present for tones created by the current user |
| **installs_count** | [`flags.2?int`](type/int) | Number of users that have installed this tone |
| **author_id** | [`flags.3?long`](type/long) | ID of the user that created this tone, if made public by the author |
| **example_english** | [`flags.5?AiComposeToneExample`](type/AiComposeToneExample) | An example showing how a sample English message is rephrased by this tone; use aicompose.getToneExample to fetch more examples |

---

## Type

[AiComposeTone](type/AiComposeTone)

---

## Example

```php
$aiComposeTone = $client->aiComposeTone(
	creator : true,
	id : 8966515185461503574,
	access_hash : -1884847407571030594,
	slug : 'dmJ3k9vYaglFnPZw',
	title : '4FlyzOpeAY1KGk7m',
	emoji_id : -1897840231202097426,
	prompt : 'RJgvMYrnxu8P5zbm',
	installs_count : 19,
	author_id : 3020597074538386497,
	example_english : $client->aiComposeToneExample(
		from : $client->textWithEntities(
			text : 'dMNcuvlOASiRaj4k',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 6,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 17,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 33,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 27,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 16,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 78,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 11,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 61,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 69,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 59,
					language : 'CQSvcsWHXm7bIfPk',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 32,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 97,
					user_id : -5225809198321045570,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 48,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 50,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 23,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 89,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 85,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 23,
					document_id : -964535278112044342,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 97,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 24,
					date : 65,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 33,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 20,
					old_text : 'mKF7UXWHavwIJ8Mk',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 13,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 83,
				),
			),
		),
		to : $client->textWithEntities(
			text : '2ce8dMnW7QsXqtPu',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 87,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 38,
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
					length : 66,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 31,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 46,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 44,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 15,
					language : 'tkCuBKgW0inPSXj9',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 28,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 33,
					user_id : -4571548369172553446,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 9,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 39,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 2,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 90,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 40,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 31,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 63,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 12,
					document_id : 2107576580512396085,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 39,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 95,
					date : 84,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 53,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 61,
					old_text : 'RmcE6FalI20fUYkd',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 15,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 33,
				),
			),
		),
	),
);
```