# account.authorizationForm

**Description** : *Telegram Passport authorization form*

**Layer** : 218

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
					id : 167886020427678639,
					access_hash : -7521121120817314503,
					size : 123543222156061226,
					dc_id : 32,
					date : 96,
					file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			files : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : -2163840326139701990,
					access_hash : 1347577125339114955,
					size : -1229742153587861326,
					dc_id : 56,
					date : 7,
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
			field : '9KSWCyRtdaZONUuv',
			text : 'k4o6H9fANnPY3xiU',
		),
		$client->secureValueErrorFrontSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'W3JRh8rPAFGQj2C4',
		),
		$client->secureValueErrorReverseSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : '9tk2SYaFJh8oLIWD',
		),
		$client->secureValueErrorSelfie(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'WExSK58oGTqiNgXm',
		),
		$client->secureValueErrorFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'MhWELANwUqoH1Kdc',
		),
		$client->secureValueErrorFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			text : 'UPBy5RLlYex2kAuh',
		),
		$client->secureValueError(
			type : $client->secureValueTypePersonalDetails(),
			hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'C7W1SjxGP6iVtn02',
		),
		$client->secureValueErrorTranslationFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'pbAFf1yZOqwkEcCt',
		),
		$client->secureValueErrorTranslationFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			text : 'ujPYyxOQ716Dimhw',
		),
	),
	users : array(
		$client->userEmpty(
			id : -237656247487218726,
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
			id : -2691327114548169508,
			access_hash : -5791200794046803772,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 86,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'HctlPrx9qnowBjRe',
					reason : 'QsrkWmBMOnogliZf',
					text : '6UA4NC9sE2zOlToc',
				),
			),
			bot_inline_placeholder : '3qWFmeR19OMU5Guz',
			lang_code : 'wOXbRylCgZVjmLeI',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 97,
			),
			color : $client->peerColor(
				color : 96,
				background_emoji_id : 822577305932263933,
			),
			profile_color : $client->peerColor(
				color : 52,
				background_emoji_id : 1960387354648534984,
			),
			bot_active_users : 26,
			bot_verification_icon : 5232914074344337338,
			send_paid_messages_stars : 2949301926837208308,
		),
	),
	privacy_policy_url : 'https://docs.liveproto.dev',
);
```