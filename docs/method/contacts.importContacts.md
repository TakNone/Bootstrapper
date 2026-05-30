# contacts.importContacts

**Description** : *Imports contacts: saves a full list on the server, adds already registered contacts to the contact list, returns added contacts and their info*

**Layer** : 225

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
			client_id : -3557029170514687339,
			phone : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			note : $client->textWithEntities(
				text : 'wDWztR2CSysFhL3B',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 40,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 36,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 52,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 33,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 65,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 69,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 69,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 97,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 6,
						language : 'DKGSuBzcWYOnJdxC',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 74,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 50,
						user_id : -304760647118645907,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 72,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 64,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 7,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 38,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 95,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 29,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 26,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 3,
						document_id : -8624353151195248158,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 7,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 78,
						date : 79,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 46,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 1,
						old_text : 'FnZ0dKfDNhECysrW',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 31,
					),
				),
			),
		),
	),
);
```