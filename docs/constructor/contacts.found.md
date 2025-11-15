# contacts.found

**Description** : *Users found by name substring and auxiliary data*

**Layer** : 216

```tl
contacts.found#b3134d9d my_results:Vector<Peer> results:Vector<Peer> chats:Vector<Chat> users:Vector<User> = contacts.Found;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>my_results</mark> | [`Vector<Peer>`](type/Peer) | Personalized results |
| <mark>results</mark> | [`Vector<Peer>`](type/Peer) | List of found user identifiers |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Found chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.Found](type/contacts.Found)

---

## Example

```php
$contactsFound = $client->contacts->found(
	my_results : array(
		$client->peerUser(
			user_id : -5086164882451037092,
		),
		$client->peerChat(
			chat_id : 8744436946587813999,
		),
		$client->peerChannel(
			channel_id : 4179416601499194224,
		),
	),
	results : array(
		$client->peerUser(
			user_id : 5299789679271855389,
		),
		$client->peerChat(
			chat_id : 1839518905249772093,
		),
		$client->peerChannel(
			channel_id : 2244499152240847439,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6180609328350107183,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 979049151628811075,
			title : '01HuqfXhbWtGFJKR',
			photo : $client->chatPhotoEmpty(),
			participants_count : 21,
			date : 71,
			version : 91,
			migrated_to : $client->inputChannelEmpty(),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 14,
			),
		),
		$client->chatForbidden(
			id : 5741627615484985079,
			title : 'RshkYfA4IgM9XTUG',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -406287492844701488,
			access_hash : 2358496010142026543,
			title : 'stmMKzLS1Aw9UOR4',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 4,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'La3iOt9ITGKnFMg4',
					reason : 'FrhY3L1gzqxKcopI',
					text : '3CdDALGV8U1rmJ9l',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 43,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 39,
			),
			participants_count : 0,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 41,
			color : $client->peerColor(
				color : 24,
				background_emoji_id : -1556812185062939665,
			),
			profile_color : $client->peerColor(
				color : 29,
				background_emoji_id : 5778534431241005337,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 77,
			subscription_until_date : 94,
			bot_verification_icon : -7420347467914998184,
			send_paid_messages_stars : 3371208192695088019,
			linked_monoforum_id : -8168997383612079546,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7986243603149929760,
			access_hash : 1711429062427224462,
			title : 'iL64VQmXkutMdeqc',
			until_date : 21,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8477556550583960524,
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
			id : -3595345994803396399,
			access_hash : 4155387160185350706,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dlgBpeToRFE8Cj3W',
					reason : 'VuN1t8UQPYBG7bqO',
					text : 'R2gV94fDOlNWFM0J',
				),
			),
			bot_inline_placeholder : 'k3ZcwvoUltaiAd4X',
			lang_code : 'T9xF1BYfXAIdaR27',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 93,
			color : $client->peerColor(
				color : 1,
				background_emoji_id : -3783425907740257725,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : -1864104299087361174,
			),
			bot_active_users : 1,
			bot_verification_icon : 2424006941596740198,
			send_paid_messages_stars : -5847505474849966839,
		),
	),
);
```