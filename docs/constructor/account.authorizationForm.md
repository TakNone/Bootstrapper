# account.authorizationForm

**Description** : *Telegram Passport authorization form*

**Layer** : 216

```tl
account.authorizationForm#ad2e1cd8 flags:# required_types:Vector<SecureRequiredType> values:Vector<SecureValue> errors:Vector<SecureValueError> users:Vector<User> privacy_policy_url:flags.0?string = account.AuthorizationForm;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>required_types</mark> | [`Vector<SecureRequiredType>`](type/SecureRequiredType) | Required Telegram Passport documents |
| <mark>values</mark> | [`Vector<SecureValue>`](type/SecureValue) | Already submitted Telegram Passport documents |
| <mark>errors</mark> | [`Vector<SecureValueError>`](type/SecureValueError) | Telegram Passport errors |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about the bot to which the form will be submitted |
| **privacy_policy_url** | [`flags.0?string`](type/string) | URL of the service's privacy policy |

---

## Type

[account.AuthorizationForm](type/account.AuthorizationForm)

---

## Example

```php
$accountAuthorizationForm = $client->account->authorizationForm(
	required_types : array(
		$client->secureRequiredType(
			native_names : true,
			selfie_required : true,
			translation_required : true,
			type : $client->secureValueTypePersonalDetails(),
		),
		$client->secureRequiredTypeOneOf(
			types : array(
				$client->secureRequiredType(
					native_names : true,
					selfie_required : true,
					translation_required : true,
					type : $client->secureValueTypePersonalDetails(...),
				),
				$client->secureRequiredTypeOneOf(
					types : array(
						$client->secureRequiredType(...),
						$client->secureRequiredTypeOneOf(...),
					),
				),
			),
		),
	),
	values : array(
		$client->secureValue(
			type : $client->secureValueTypePersonalDetails(),
			data : $client->secureData(
				data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				data_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			front_side : $client->secureFileEmpty(),
			reverse_side : $client->secureFileEmpty(),
			selfie : $client->secureFileEmpty(),
			translation : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : -3123967983360071940,
					access_hash : 6131747267609292274,
					size : -2565932859760822001,
					dc_id : 5,
					date : 60,
					file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			files : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : 5254604302265096538,
					access_hash : -1324878707119944723,
					size : 532584160249755633,
					dc_id : 82,
					date : 8,
					file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			plain_data : $client->securePlainPhone(
				phone : '+1234567890',
			),
			hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	errors : array(
		$client->secureValueErrorData(
			type : $client->secureValueTypePersonalDetails(),
			data_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			field : '9lR0zpPg3AIcW5yJ',
			text : 'lbHRXN3YgFBe8QAn',
		),
		$client->secureValueErrorFrontSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'dwZzLFNGVpi6SnxW',
		),
		$client->secureValueErrorReverseSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'EQsvW1kTzRGXbhIj',
		),
		$client->secureValueErrorSelfie(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'TbOA7dk9EI0JBuye',
		),
		$client->secureValueErrorFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'PieM6jysENh3vGQT',
		),
		$client->secureValueErrorFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			text : 'dG7hX9Pa8eUmNl6b',
		),
		$client->secureValueError(
			type : $client->secureValueTypePersonalDetails(),
			hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'OEHFpL17YKAzBZSe',
		),
		$client->secureValueErrorTranslationFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'Y4UXC1W0QRKcIJNO',
		),
		$client->secureValueErrorTranslationFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			text : 'GMKOnFqDygk4vdrx',
		),
	),
	users : array(
		$client->userEmpty(
			id : 8378678365934562998,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : 7884796184103554747,
			access_hash : -8899194539934384307,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'p5yzNIFAQGJRtKmX',
					reason : 'DR9Xbgc2O4lyZVIa',
					text : 'xgM1kHe2DwtEpdVT',
				),
			),
			bot_inline_placeholder : 'EFfPrtvNcOMV5p4a',
			lang_code : 'xVIH6Rwc3GfMtYDJ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 75,
			color : $client->peerColor(
				color : 75,
				background_emoji_id : 1379618850532583385,
			),
			profile_color : $client->peerColor(
				color : 84,
				background_emoji_id : -4021504719826892235,
			),
			bot_active_users : 47,
			bot_verification_icon : 954376144264046494,
			send_paid_messages_stars : 234926642288415982,
		),
	),
	privacy_policy_url : 'https://docs.liveproto.dev',
);
```