# contacts.found

**Description** : *Users found by name substring and auxiliary data*

**Layer** : 211

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
			user_id : -5246514025421533882,
		),
		$client->peerChat(
			chat_id : -779971034913672089,
		),
		$client->peerChannel(
			channel_id : -4685993247421784774,
		),
	),
	results : array(
		$client->peerUser(
			user_id : -6446216507539739221,
		),
		$client->peerChat(
			chat_id : 6845127313050497974,
		),
		$client->peerChannel(
			channel_id : 1642338621934976767,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6772507474588399795,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 9160474138608709302,
			title : 'NaB1FMHmydpsjYDL',
			photo : $client->chatPhotoEmpty(),
			participants_count : 24,
			date : 38,
			version : 19,
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
				until_date : 74,
			),
		),
		$client->chatForbidden(
			id : -3744490650517954895,
			title : 'CEt9FOBkLPd0zH4c',
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
			id : -965539752350285469,
			access_hash : -3655962286803006063,
			title : 'QECz8LaqhKnurX7l',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 4,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'kfab1WP2MwHNYRrI',
					reason : '6CqkD2FU1QctjxaH',
					text : 'P2TEsO3mLZStVYiX',
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
				until_date : 54,
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
				until_date : 75,
			),
			participants_count : 74,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 68,
			color : $client->peerColor(
				color : 71,
				background_emoji_id : 938543961040600231,
			),
			profile_color : $client->peerColor(
				color : 18,
				background_emoji_id : 8336378210761482174,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 100,
			subscription_until_date : 6,
			bot_verification_icon : -4924801286106725332,
			send_paid_messages_stars : 8780511752384329461,
			linked_monoforum_id : 1661620961281634949,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6478707196361640000,
			access_hash : 7818498203512632014,
			title : 'RbrsDAepmqaNf4zj',
			until_date : 16,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1287988429613949225,
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
			id : 7964001875123403932,
			access_hash : 6776060365934933076,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IsvcLg7t2DnWFQTo',
					reason : 'gO35XEA0BWTlG4sm',
					text : 'kLije045UnTuWm3p',
				),
			),
			bot_inline_placeholder : 'vVrJ98C1fusdwIyX',
			lang_code : 'OpGxLYvI5lZCaqBQ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 86,
			color : $client->peerColor(
				color : 16,
				background_emoji_id : 3467522438931615257,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : -7388441778962649901,
			),
			bot_active_users : 1,
			bot_verification_icon : 5355718946379124752,
			send_paid_messages_stars : 6629516011941612416,
		),
	),
);
```