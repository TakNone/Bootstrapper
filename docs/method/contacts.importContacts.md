# contacts.importContacts

**Description** : *Imports contacts: saves a full list on the server, adds already registered contacts to the contact list, returns added contacts and their info*

**Layer** : 227

```tl
contacts.importContacts#2c800be5 contacts:Vector<InputContact> = contacts.ImportedContacts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>contacts</mark> | [`Vector<InputContact>`](type/InputContact) | List of contacts to import |

---

## Result

[contacts.ImportedContacts](type/contacts.ImportedContacts)

---

## Example

```php
$contactsImportedContacts = $client->contacts->importContacts(
	contacts : array(
		$client->inputPhoneContact(
			client_id : -5697335212327149279,
			phone : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			note : $client->textWithEntities(
				text : 'pOm2RVyxIC53PS6d',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 51,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 53,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 15,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 44,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 82,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 4,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 49,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 98,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 1,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 13,
						language : 'lm9uy86DZNLdr0qT',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 8,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 46,
						user_id : 7132120290105860824,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 84,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 86,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 26,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 29,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 37,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 46,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 98,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 91,
						document_id : 4325312697114217065,
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
						length : 67,
						date : 37,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 40,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 67,
						old_text : 'fQ5pMwYHFvEmd9BT',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 77,
					),
				),
			),
		),
	),
);
```