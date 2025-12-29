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
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
					id : -5559755478653707310,
					access_hash : 1405215317600639522,
					size : -7578378586367040597,
					dc_id : 4,
					date : 8,
					file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			files : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : -2936035636972197863,
					access_hash : 7594181832506409734,
					size : -4455757516383723017,
					dc_id : 90,
					date : 4,
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
			field : 'fAwpjdml0zKgihvk',
			text : 'kKRZ0x5zPhW3QETX',
		),
		$client->secureValueErrorFrontSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : '5ta2OuYPXKMBNRhJ',
		),
		$client->secureValueErrorReverseSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : '9rUNFq30Mp87QS5k',
		),
		$client->secureValueErrorSelfie(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'JTI75EBqWvbgsjYz',
		),
		$client->secureValueErrorFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'xYf6eQkAqGFRPbwW',
		),
		$client->secureValueErrorFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			text : 'FIOe9r8zqKit3EnQ',
		),
		$client->secureValueError(
			type : $client->secureValueTypePersonalDetails(),
			hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'Tsh1o9zO0UNQlHdI',
		),
		$client->secureValueErrorTranslationFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : '8WJlDFEULR3IkGO2',
		),
		$client->secureValueErrorTranslationFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			text : 'Bcpm9G2T0Z6fetWz',
		),
	),
	users : array(
		$client->userEmpty(
			id : 1744620062919642054,
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
			id : -3540800521367957612,
			access_hash : -4060248147477273441,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ct6ZIm95oJuXdarp',
					reason : 'I4gCNBcv52jRxGl9',
					text : 'urCiB2maXDQN6dZV',
				),
			),
			bot_inline_placeholder : 'AYDFH0uikPzTVhpf',
			lang_code : 'vyWsYDiRckG1Qet0',
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
				max_id : 82,
			),
			color : $client->peerColor(
				color : 63,
				background_emoji_id : -1401820886472724036,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : 3834263160496646964,
			),
			bot_active_users : 38,
			bot_verification_icon : -6344388372543511,
			send_paid_messages_stars : -4392450232287220783,
		),
	),
	privacy_policy_url : 'https://docs.liveproto.dev',
);
```