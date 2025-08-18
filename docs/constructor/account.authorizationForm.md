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
				data : ']?l~?LiveProtoAW?a',
				data_hash : '_K/(7LiveProto"?c',
				secret : 'Iӕ4LiveProtoȐ2',
			),
			front_side : $client->secureFileEmpty(),
			reverse_side : $client->secureFileEmpty(),
			selfie : $client->secureFileEmpty(),
			translation : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : -1293658806468941072,
					access_hash : 5005056842954740544,
					size : 7809395206697932370,
					dc_id : 12,
					date : 24,
					file_hash : '?/LiveProto?
T??',
					secret : '?g<?LiveProtob??Û',
				),
			),
			files : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : 3832307423037771502,
					access_hash : -2084469580020966581,
					size : 8604000355509096762,
					dc_id : 46,
					date : 66,
					file_hash : 'i/' . "\0" . 'LiveProto?n',
					secret : '?t?Q{LiveProto???xk',
				),
			),
			plain_data : $client->securePlainPhone(
				phone : '+1234567890',
			),
			hash : '???LiveProtoR??M?',
		),
	),
	errors : array(
		$client->secureValueErrorData(
			type : $client->secureValueTypePersonalDetails(),
			data_hash : 'sK?ѦLiveProto??)x',
			field : 'ZbyhtDTamiAqUQJr',
			text : 'n6VrOlYzFU35oWGP',
		),
		$client->secureValueErrorFrontSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : 'D??}#LiveProto??׳',
			text : 'UkHFbipe7SyuEXNT',
		),
		$client->secureValueErrorReverseSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : 'A?^?[LiveProto;?j?',
			text : '9DXIJq6gfHtZAuRz',
		),
		$client->secureValueErrorSelfie(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : '??f?LiveProtom?{',
			text : 'ZrU4HMn03RuSxvVl',
		),
		$client->secureValueErrorFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : '????LiveProto?-S??',
			text : 'YdBoC6l4XaZhn9vs',
		),
		$client->secureValueErrorFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array('?y?6?LiveProto?N)??'),
			text : 'DfxySX7gp39Rct6L',
		),
		$client->secureValueError(
			type : $client->secureValueTypePersonalDetails(),
			hash : '??ϭLiveProtoAPMg?',
			text : 'LYZehftb0drzlEs8',
		),
		$client->secureValueErrorTranslationFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : '???aLiveProtoƟD??',
			text : 'e1PJDI7LVMCYi4aO',
		),
		$client->secureValueErrorTranslationFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array('_º?LiveProto???W'),
			text : 'jOBhFGfWcY59vQ30',
		),
	),
	users : array(
		$client->userEmpty(
			id : -8330885044052167521,
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
			id : 2730116014913515038,
			access_hash : 7348424529605554984,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'xfnPdC8u9BjM7g2o',
					reason : 'UEf8JdImYPBvAalq',
					text : 'xy7vt3DLE0ugVYjz',
				),
			),
			bot_inline_placeholder : 'dNZKRB5a8Tflt1J0',
			lang_code : 'LNDzuxVUSXP42vgB',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 42,
			color : $client->peerColor(
				color : 11,
				background_emoji_id : 5650333406789309152,
			),
			profile_color : $client->peerColor(
				color : 94,
				background_emoji_id : -521943296140250295,
			),
			bot_active_users : 4,
			bot_verification_icon : -8173848288626104058,
			send_paid_messages_stars : -7282277945567104609,
		),
	),
	privacy_policy_url : 'https://docs.liveproto.dev',
);
```