# contacts.topPeers

**Description** : *Top peers*

**Layer** : 218

```tl
contacts.topPeers#70b772a8 categories:Vector<TopPeerCategoryPeers> chats:Vector<Chat> users:Vector<User> = contacts.TopPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>categories</mark> | [`Vector<TopPeerCategoryPeers>`](type/TopPeerCategoryPeers) | Top peers by top peer category |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[contacts.TopPeers](type/contacts.TopPeers)

---

## Example

```php
$contactsTopPeers = $client->contacts->topPeers(
	categories : array(
		$client->topPeerCategoryPeers(
			category : $client->topPeerCategoryBotsPM(),
			count : 54,
			peers : array(
				$client->topPeer(
					peer : $client->peerUser(
						user_id : -8453170139545229420,
					),
					rating : -1245861.5078125,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6970085969099353094,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5014004418138058318,
			title : 'hOcbqQrZaBilVvye',
			photo : $client->chatPhotoEmpty(),
			participants_count : 82,
			date : 2,
			version : 46,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 16,
			),
		),
		$client->chatForbidden(
			id : -3770483393740287063,
			title : 'WlKOc5pmwNsyjCdL',
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
			id : -6106687933678923729,
			access_hash : -6109671540460777380,
			title : 'ilAFzd6OU4Gjb7Lr',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 87,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZI94oYWgHEGnNKyb',
					reason : 'MrfWmxkXupeDlcNI',
					text : '8lOjw6bIeQMc73dU',
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
				until_date : 6,
			),
			participants_count : 59,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 67,
			),
			color : $client->peerColor(
				color : 53,
				background_emoji_id : 7832891429443454010,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : 6847124477205915263,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 26,
			subscription_until_date : 43,
			bot_verification_icon : 475938146189809111,
			send_paid_messages_stars : -6216496996633030372,
			linked_monoforum_id : 3442281714033408437,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6733513198731126942,
			access_hash : -6170193906505024469,
			title : '9WxcPEUvwtudT0aH',
			until_date : 19,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5252808553485779051,
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
			id : 8170926841571833626,
			access_hash : -3138540741109808246,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 65,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'x6uvogkMer4lqnmE',
					reason : 'QcA8GHRNXjgVMlv9',
					text : '9GEeY2DN0T5iftOj',
				),
			),
			bot_inline_placeholder : 'G14KZLQs9WybfCEY',
			lang_code : 'RlzME7jmdyGpkZAq',
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
				max_id : 84,
			),
			color : $client->peerColor(
				color : 67,
				background_emoji_id : 4421173474456338609,
			),
			profile_color : $client->peerColor(
				color : 31,
				background_emoji_id : -974084813947465334,
			),
			bot_active_users : 95,
			bot_verification_icon : 3668357040495027592,
			send_paid_messages_stars : 5387875671033987966,
		),
	),
);
```