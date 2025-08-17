# account.authorizationForm

**Description** : *Telegram Passport authorization form*

**Layer** : 211

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
				data : '?¢D?LiveProtocB߱',
				data_hash : '?????LiveProto.<??L',
				secret : '???5LiveProto?N?',
			),
			front_side : $client->secureFileEmpty(),
			reverse_side : $client->secureFileEmpty(),
			selfie : $client->secureFileEmpty(),
			translation : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : 4185274314292940557,
					access_hash : -3119216223650430315,
					size : -2469484863443236615,
					dc_id : 16,
					date : 37,
					file_hash : '?fL.LiveProto?Z_4',
					secret : '/???LiveProto?r',
				),
			),
			files : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : 4938417309668833355,
					access_hash : -7233315498583373437,
					size : 7713200980376809298,
					dc_id : 73,
					date : 65,
					file_hash : '??BCLiveProto$??T6',
					secret : 'at?LiveProto??]?\\',
				),
			),
			plain_data : $client->securePlainPhone(
				phone : '+1234567890',
			),
			hash : 'X???LiveProto?>H?F',
		),
	),
	errors : array(
		$client->secureValueErrorData(
			type : $client->secureValueTypePersonalDetails(),
			data_hash : 'L?z}LiveProto???T/',
			field : 'RyZ4uAdJzEBTfjK9',
			text : 'I4vLzTaSl7RPDFNo',
		),
		$client->secureValueErrorFrontSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : 'X/??LiveProto1S??_',
			text : 'tCv3lbI8SzuJ2fyX',
		),
		$client->secureValueErrorReverseSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : '?((??LiveProto??{?',
			text : 'u7gJc2bsHGFro409',
		),
		$client->secureValueErrorSelfie(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : '?3e;?LiveProto+?g˜',
			text : 'dntCSJjqWhE0r6LH',
		),
		$client->secureValueErrorFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : '?W?|LLiveProtob4;?',
			text : 'dvq5ybeAiKEUx3X1',
		),
		$client->secureValueErrorFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array('h[?LiveProtonz\\??'),
			text : 'Kgu8JEHsbly3nTRY',
		),
		$client->secureValueError(
			type : $client->secureValueTypePersonalDetails(),
			hash : 'C?7?,LiveProto:2Ǻ',
			text : 'UlxBHa2t8NrncpeT',
		),
		$client->secureValueErrorTranslationFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : '?J95?LiveProtok??F?',
			text : 'kbFmQyMdiUPtZAX4',
		),
		$client->secureValueErrorTranslationFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array('?k?ȅLiveProto??:~'),
			text : '39ERwQdVax2jzP7t',
		),
	),
	users : array(
		$client->userEmpty(
			id : 5776949275374987020,
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
			id : 2920177896460802052,
			access_hash : -2877214769109013180,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 75,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'G0bkiOcIpTu6rgLS',
					reason : '1YCAu5gpnbcHo8Q7',
					text : 'Xfctb4vjeEGYDawO',
				),
			),
			bot_inline_placeholder : 'mFDBOYRnZAi01d4K',
			lang_code : 'S37P0ZtAUoCOFLyc',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 92,
			color : $client->peerColor(
				color : 49,
				background_emoji_id : -8059992902639820492,
			),
			profile_color : $client->peerColor(
				color : 42,
				background_emoji_id : -1238342141715745073,
			),
			bot_active_users : 23,
			bot_verification_icon : -638357542769210466,
			send_paid_messages_stars : -6299609058059434561,
		),
	),
	privacy_policy_url : 'https://docs.liveproto.dev',
);
```