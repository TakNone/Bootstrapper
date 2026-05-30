# updates.difference

**Description** : *Full list of occurred events*

**Layer** : 225

```tl
updates.difference#f49ca0 new_messages:Vector<Message> new_encrypted_messages:Vector<EncryptedMessage> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> state:updates.State = updates.Difference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | List of new messages |
| <mark>new_encrypted_messages</mark> | [`Vector<EncryptedMessage>`](type/EncryptedMessage) | List of new encrypted secret chat messages |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in events |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in events |
| <mark>state</mark> | [`updates.State`](type/updates.State) | Current state |

---

## Type

[updates.Difference](type/updates.Difference)

---

## Example

```php
$updatesDifference = $client->updates->difference(
	new_messages : array(
		$client->messageEmpty(
			id : 43,
			peer_id : $client->peerUser(
				user_id : -1340203343753196535,
			),
		),
		$client->message(
			out : true,
			mentioned : true,
			media_unread : true,
			silent : true,
			post : true,
			from_scheduled : true,
			legacy : true,
			edit_hide : true,
			pinned : true,
			noforwards : true,
			invert_media : true,
			offline : true,
			video_processing_pending : true,
			paid_suggested_post_stars : true,
			paid_suggested_post_ton : true,
			id : 9,
			from_id : $client->peerUser(
				user_id : -7405191987348057339,
			),
			from_boosts_applied : 5,
			from_rank : 'Plysz2EVLipT1Ufh',
			peer_id : $client->peerUser(
				user_id : 2616503693396558279,
			),
			saved_peer_id : $client->peerUser(
				user_id : -8739064315520369676,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -4200968021753177668,
				),
				from_name : 'c1wHnUNTuBjWXd9k',
				date : 22,
				channel_post : 74,
				post_author : 'G6vqfWpuerdDk7wj',
				saved_from_peer : $client->peerUser(
					user_id : -8049086108638778146,
				),
				saved_from_msg_id : 16,
				saved_from_id : $client->peerUser(
					user_id : -8818603679099351935,
				),
				saved_from_name : 'VFgC4B87HYKiPN6R',
				saved_date : 40,
				psa_type : 'w0flqvMdR5uIjtmo',
			),
			via_bot_id : 7545290555152613065,
			via_business_bot_id : 5348701137822854415,
			guestchat_via_from : $client->peerUser(
				user_id : -7726161589309772072,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 30,
				reply_to_peer_id : $client->peerUser(
					user_id : -7759574312096581274,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'feo8PJijNgbHWzXE',
					date : 100,
					channel_post : 24,
					post_author : 'yTxQswbvRrAWJcN9',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 62,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 's5VJTbzWtnpMF0uh',
					saved_date : 17,
					psa_type : 'tXCKHar5bds8eWpB',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 17,
				quote_text : 'DtFBQnJR6KIWqOrz',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 89,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 48,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 1,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 31,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 79,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 74,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 88,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 93,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 55,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 13,
						language : 'H1k3rpEU62BFQKYV',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 6,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 30,
						user_id : 9050956084395952140,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 2,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 62,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 82,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 57,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 55,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 6,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 54,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 4,
						document_id : 6808238947108145871,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 57,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 58,
						date : 73,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 89,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 77,
						old_text : 'z9KjYM3Ufgev5THB',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 73,
					),
				),
				quote_offset : 53,
				todo_item_id : 89,
				poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			date : 12,
			message : 'SKGDdNpxUF3Y9tqi',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 48,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 99,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 59,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 11,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 96,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 88,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 26,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 85,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 76,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 33,
					language : '0shGZteD4rUmNL3o',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 26,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 26,
					user_id : 7241940676836162231,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 9,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 4,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 12,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 65,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 91,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 65,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 43,
					document_id : -2478996247692807585,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 33,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 42,
					date : 0,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 84,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 56,
					old_text : 'FzlukgpaiSGL39d6',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 60,
				),
			),
			views : 85,
			forwards : 51,
			replies : $client->messageReplies(
				comments : true,
				replies : 84,
				replies_pts : 100,
				recent_repliers : array(
					$client->peerUser(
						user_id : 6820975031165998870,
					),
					$client->peerChat(
						chat_id : -9194356399871346043,
					),
					$client->peerChannel(
						channel_id : -7831141988183597636,
					),
				),
				channel_id : -2214491694972269262,
				max_id : 48,
				read_max_id : 24,
			),
			edit_date : 11,
			post_author : 'KhnsAizqB4wX5xef',
			grouped_id : 4463636630718499743,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 14,
						reaction : $client->reactionEmpty(...),
						count : 21,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 55,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 46,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IklU5L1vfRuj2Vqh',
					reason : 'rsmRpqNJ9xoaYLOA',
					text : 'kdtbEPIQBMmlcfn8',
				),
			),
			ttl_period : 86,
			quick_reply_shortcut_id : 29,
			effect : -1941126677085310132,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'lP2jLKnvtAD70k4o',
				text : $client->textWithEntities(
					text : 'FPaVis5xrom08tOk',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				hash : 0,
			),
			report_delivery_until_date : 22,
			paid_message_stars : -4199670277709956265,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -3291811216296244334,
					nanos : 56,
				),
				schedule_date : 74,
			),
			schedule_repeat_period : 16,
			summary_from_language : 'x3TVd4BHWjna2eEw',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 30,
			from_id : $client->peerUser(
				user_id : -1846311294848748605,
			),
			peer_id : $client->peerUser(
				user_id : 1878739391858903574,
			),
			saved_peer_id : $client->peerUser(
				user_id : -457788630872019022,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 70,
				reply_to_peer_id : $client->peerUser(
					user_id : -2540378205582786458,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'YZjQkTseSyKUzwLG',
					date : 52,
					channel_post : 48,
					post_author : 'AYCft8Pjr25s4h9v',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 77,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'DlUxREoh0HVWPAMN',
					saved_date : 77,
					psa_type : 'm3Za9qE4uK7sNDMW',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 4,
				quote_text : 'EqIZWYGV7B35sfQx',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 56,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 9,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 47,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 91,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 98,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 37,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 3,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 97,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 95,
						language : 'PRUBuxSKifqn5TFN',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 65,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 16,
						user_id : -5035155630336382759,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 0,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 85,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 64,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 97,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 65,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 91,
						document_id : -4988888841472428945,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 19,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 23,
						date : 15,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 76,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 10,
						old_text : 'tvHKD35xQ0hF47Uc',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 71,
					),
				),
				quote_offset : 26,
				todo_item_id : 93,
				poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			date : 5,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 45,
						reaction : $client->reactionEmpty(...),
						count : 91,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 78,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 47,
					),
				),
			),
			ttl_period : 34,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : -6917511502007280960,
			chat_id : 21,
			date : 41,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : 7965698275943693882,
			chat_id : 10,
			date : 55,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 29,
				peer_id : $client->peerUser(
					user_id : -8368641969007486788,
				),
			),
			pts : 84,
			pts_count : 54,
		),
		$client->updateMessageID(
			id : 72,
			random_id : -4137654521769583102,
		),
		$client->updateDeleteMessages(
			messages : array(26),
			pts : 18,
			pts_count : 1,
		),
		$client->updateUserTyping(
			user_id : -6413390281716784297,
			top_msg_id : 52,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 1478395700760156468,
			from_id : $client->peerUser(
				user_id : -7855546540988867080,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -4820382614588929680,
				self_participant : $client->chatParticipant(
					user_id : 668930712211621832,
					inviter_id : 5527467893925786402,
					date : 28,
					rank : 'jNA6Oz7UouyLwYnR',
				),
			),
		),
		$client->updateUserStatus(
			user_id : 3350820929927036613,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 4197254080127064582,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 0,
			date : 55,
			device : 'acBOgdP6FH4Rz7St',
			location : 'nhMwjdrWGoDzEUbg',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -3219959959690515309,
				chat_id : 35,
				date : 45,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 11,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 75,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 68,
			),
			date : 60,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 80,
			max_date : 12,
			date : 75,
		),
		$client->updateChatParticipantAdd(
			chat_id : -7932903480109418923,
			user_id : 4562364744800642474,
			inviter_id : -3304865804155641840,
			date : 43,
			version : 48,
		),
		$client->updateChatParticipantDelete(
			chat_id : -2414696075981222236,
			user_id : 1586717762953772393,
			version : 11,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 21,
					ip_address : '127.0.0.1',
					port : 81,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -5088978674344710213,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 97,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 29,
			type : 'ut7yz4DIZoeATB6X',
			message : 'c7MhsDdaH52XwSOL',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 44,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 36,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 34,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 39,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 36,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 93,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 89,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 84,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 91,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 73,
					language : 'X2wHlqdJ4SbzVDZv',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 56,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 6,
					user_id : -7255277632962232577,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 12,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 11,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 89,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 71,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 94,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 63,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 23,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 33,
					document_id : -7467180298603762585,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 8,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 23,
					date : 34,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 92,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 13,
					old_text : 'CyM8HwhnrBvkY2al',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 17,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-4073396694911806058),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(8191266095863065309),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-3278286487201920612),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-8190037926994247059),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -4727221397354075341,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 30,
			peer : $client->peerUser(
				user_id : 1411150210853030583,
			),
			top_msg_id : 66,
			max_id : 87,
			still_unread_count : 70,
			pts : 55,
			pts_count : 66,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 8634179857889287843,
			),
			max_id : 91,
			pts : 43,
			pts_count : 93,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 1390266474254876368,
				url : 'https://docs.liveproto.dev',
			),
			pts : 93,
			pts_count : 58,
		),
		$client->updateReadMessagesContents(
			messages : array(75),
			pts : 44,
			pts_count : 19,
			date : 68,
		),
		$client->updateChannelTooLong(
			channel_id : 3551166351819385712,
			pts : 44,
		),
		$client->updateChannel(
			channel_id : -8902654473804838242,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 12,
				peer_id : $client->peerUser(
					user_id : -533517381613023511,
				),
			),
			pts : 83,
			pts_count : 73,
		),
		$client->updateReadChannelInbox(
			folder_id : 99,
			channel_id : 7870281636788359415,
			max_id : 30,
			still_unread_count : 17,
			pts : 63,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -8469463336959681637,
			messages : array(61),
			pts : 99,
			pts_count : 94,
		),
		$client->updateChannelMessageViews(
			channel_id : -8784181086012379383,
			id : 32,
			views : 28,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 2941395258053860706,
			user_id : -7542533166324149255,
			is_admin : true,
			version : 35,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 23,
					id : 2329809835457108640,
					access_hash : 8341927948052385077,
					title : '2BxCgt3DnUGl9P4b',
					short_name : 'hlqMEH0YgSX6cw3C',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 49,
					thumb_version : 34,
					thumb_document_id : 6570868222971548344,
					count : 14,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'nyBsmTi4NCJ26PkY',
						documents : array(-5720213184982688774),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : 410269154079215455,
						keyword : array('2tbdXMsD5EFOLkUY'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -6006572108015272221,
					),
					$client->document(
						id : 1055671986344537903,
						access_hash : -4002341421973526569,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 3,
						mime_type : 'Zf4S0LXyYqEgjPzF',
						size : -6068343517552070315,
						thumbs : array(
							$client->photoSizeEmpty(...),
							$client->photoSize(...),
							$client->photoCachedSize(...),
							$client->photoStrippedSize(...),
							$client->photoSizeProgressive(...),
							$client->photoPathSize(...),
						),
						video_thumbs : array(
							$client->videoSize(...),
							$client->videoSizeEmojiMarkup(...),
							$client->videoSizeStickerMarkup(...),
						),
						dc_id : 35,
						attributes : array(
							$client->documentAttributeImageSize(...),
							$client->documentAttributeAnimated(...),
							$client->documentAttributeSticker(...),
							$client->documentAttributeVideo(...),
							$client->documentAttributeAudio(...),
							$client->documentAttributeFilename(...),
							$client->documentAttributeHasStickers(...),
							$client->documentAttributeCustomEmoji(...),
						),
					),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(-7434916489928175010),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 1987190184375827735,
			user_id : -8184297513030365408,
			query : '3XksVHPxaYRIUWAo',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : '9ueZrtDf1YyVQ3lc',
		),
		$client->updateBotInlineSend(
			user_id : -1143321747811900202,
			query : 'J2ptarQeUSnKTm38',
			geo : $client->geoPointEmpty(),
			id : 'MKOFhn7NUbjd5xwB',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 51,
				id : -882526220297793402,
				access_hash : -3421111539002952103,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 91,
				peer_id : $client->peerUser(
					user_id : 1607780557206966452,
				),
			),
			pts : 73,
			pts_count : 85,
		),
		$client->updateBotCallbackQuery(
			query_id : -716789761695902682,
			user_id : 6976638656288827338,
			peer : $client->peerUser(
				user_id : -8661457935233136941,
			),
			msg_id : 20,
			chat_instance : 7578642877038093499,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'b2ULCKk8p3RxvrOA',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 8,
				peer_id : $client->peerUser(
					user_id : 6374905019842008186,
				),
			),
			pts : 94,
			pts_count : 18,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -8820655269021469711,
			user_id : 6341250208489285728,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 2,
				id : -9200959278373262072,
				access_hash : 8336389551022691335,
			),
			chat_instance : -2646447743955496478,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'UrlYPyWf2Js63O7u',
		),
		$client->updateReadChannelOutbox(
			channel_id : -8121563655982427064,
			max_id : 39,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -2524574561248376516,
			),
			top_msg_id : 52,
			saved_peer_id : $client->peerUser(
				user_id : 5679843235946275866,
			),
			draft : $client->draftMessageEmpty(
				date : 87,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -8241001705739391289,
			webpage : $client->webPageEmpty(
				id : -593605710317007946,
				url : 'https://docs.liveproto.dev',
			),
			pts : 35,
			pts_count : 66,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 19,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -3591369877858554007,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 77,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -2521060565763657738,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 24,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'Mp7HXOQTuJ2SVL5N',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 375699831107457551,
			data : $client->dataJSON(
				data : '9lj5mTeOPHunvx0B',
			),
			timeout : 36,
		),
		$client->updateBotShippingQuery(
			query_id : -627557588379821953,
			user_id : -6589444495103858515,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'o7gVYU8O1leXjwqC',
				street_line2 : 'Zk1DNUyehOltxI7Q',
				city : 'O3JPsfoE10YecjiH',
				state : 'idhayWKzqrDXM2GE',
				country_iso2 : 'M7biKaIUWv24mVcO',
				post_code : 'PfGcBR4J93OmuW0o',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 4032006786842569321,
			user_id : 605046286411670722,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'zqamNiWQ0OwCVbIc',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'wiLYa4fRVcnWx6p2',
					street_line2 : 'wMUWBlJ4KTLF7xQo',
					city : 'QbvnApxwq2sLjZrY',
					state : 'Rtu8IWxeOEzZ1BYa',
					country_iso2 : 'goTLDvnJYmNaqGEu',
					post_code : '6j2UkQPsJO1MDZz4',
				),
			),
			shipping_option_id : 'k435id9AELV8bTtx',
			currency : 'vWZY74VCK0yLniqF',
			total_amount : 7152889849199740529,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 3782180122488894270,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'N1E3Svk2VzQa4F6U',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'v0roQzdlMpKeAk76',
				from_version : 82,
				version : 10,
				strings : array(
					$client->langPackString(
						key : 'DbPyVN9GBrS160hM',
						value : '3NhaSRFMxIprbKdJ',
					),
					$client->langPackStringPluralized(
						key : 'kwuJZaiANF8dMvPt',
						zero_value : 'vI3uZkiQHLJn02Rw',
						one_value : 'JFm1xr5jAC76Lwic',
						two_value : 'BNybGOpmLzWn1isQ',
						few_value : 'MNtn9yO8jBqfdQX6',
						many_value : 'dKTp73smAXgGjU40',
						other_value : 'eg5EFln3bpYQ8aBw',
					),
					$client->langPackStringDeleted(
						key : 'uaUwYd3XtIPW9lvk',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 7275439799817275409,
			top_msg_id : 55,
			saved_peer_id : $client->peerUser(
				user_id : -5578122814863378105,
			),
			messages : array(1),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -3949409702472135011,
			available_min_id : 27,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -2221372797057054615,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : -1821670276836316252,
			),
		),
		$client->updateMessagePoll(
			peer : $client->peerUser(
				user_id : -6345131230073717404,
			),
			msg_id : 85,
			top_msg_id : 31,
			poll_id : 5002058098951841929,
			poll : $client->poll(
				id : -6831158184229315060,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				open_answers : true,
				revoting_disabled : true,
				shuffle_answers : true,
				hide_results_until_close : true,
				creator : true,
				subscribers_only : true,
				question : $client->textWithEntities(
					text : 'SvZxF2PqoY0Hn9dy',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						media : $client->messageMediaEmpty(...),
						added_by : $client->peerUser(...),
						date : 54,
					),
					$client->inputPollAnswer(
						text : $client->textWithEntities(...),
						media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
					),
				),
				close_period : 10,
				close_date : 6,
				countries_iso2 : array('ENRqpwd3ur2jcaKG'),
				hash : 0,
			),
			results : $client->pollResults(
				min : true,
				has_unread_votes : true,
				can_view_stats : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 21,
						recent_voters : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
					),
				),
				total_voters : 49,
				recent_voters : array(
					$client->peerUser(
						user_id : -3282760872676478495,
					),
					$client->peerChat(
						chat_id : 4045640429197989120,
					),
					$client->peerChannel(
						channel_id : 1946769951914784551,
					),
				),
				solution : 'mTv1w3yuSU2cIdbr',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 89,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 23,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 57,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 47,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 98,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 100,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 99,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 81,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 52,
						language : 'Wzh2CE6jXl3xumg4',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 43,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 17,
						user_id : -5385842379411503774,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 83,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 94,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 62,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 65,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 48,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 77,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 56,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 54,
						document_id : -990094730384993556,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 84,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 35,
						date : 15,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 77,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 52,
						old_text : 'qZ3wIl0o7YcgOzmh',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 64,
					),
				),
				solution_media : $client->messageMediaEmpty(),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 8632815487825088752,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 49,
			),
			version : 0,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 4057076920545105436,
					),
					folder_id : 94,
				),
			),
			pts : 10,
			pts_count : 78,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -6158496812583817353,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 4,
				request_chat_title : 'JfMIDylc5tB3Q8bz',
				request_chat_date : 57,
				business_bot_id : 5565847754513812178,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 5746471005804303491,
				registration_month : 'fW1RaBMVqUsJIk6v',
				phone_country : '+1234567890',
				name_change_date : 70,
				photo_change_date : 90,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -4271220839049362301,
					),
					expires : 2,
					distance : 38,
				),
				$client->peerSelfLocated(
					expires : 97,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 36,
				peer_id : $client->peerUser(
					user_id : 573944628060901507,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -1802509778228899892,
			),
			messages : array(78),
			sent_messages : array(82),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 7224404350360996328,
				access_hash : 5007334387160997524,
				slug : 'yB5Y4wShk60Jv1eu',
				title : 'YwAtjluLaGC0VXRh',
				document : $client->documentEmpty(
					id : 9161757023935619473,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 12,
						outbox_accent_color : 88,
						message_colors : array(29),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'ukDLvxfK34l7JtTn',
				installs_count : 7,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 1653620906690161579,
			),
			msg_id : 6,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 6752757263385109099,
			peer : $client->peerUser(
				user_id : -1410820705303717526,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			positions : array(50),
			qts : 32,
		),
		$client->updateDialogFilter(
			id : 52,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 44,
				title : $client->textWithEntities(
					text : '5pYmAhQMtK041a7q',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				emoticon : 'RTrZpjkfVXFnaKey',
				color : 24,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(24),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 5539219547641491047,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -6289302372273583892,
			id : 64,
			forwards : 62,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -7187685671247681890,
			top_msg_id : 40,
			read_max_id : 1,
			broadcast_id : -674725342801817267,
			broadcast_post : 21,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 8016947266833542281,
			top_msg_id : 46,
			read_max_id : 48,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -4327083906929358254,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -1183480047998942453,
			top_msg_id : 50,
			from_id : $client->peerUser(
				user_id : -3703852531695108,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -8903188916769132969,
			),
			messages : array(23),
			pts : 97,
			pts_count : 69,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -3093822613481527149,
			messages : array(10),
			pts : 28,
			pts_count : 3,
		),
		$client->updateChat(
			chat_id : -5270669582992397980,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -4952923002595862105,
				access_hash : -7341405744637095413,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(
						user_id : -7150454471360624884,
					),
					date : 64,
					active_date : 87,
					source : 72,
					volume : 28,
					about : 'luTbKmjrO0Wd76fH',
					raise_hand_rating : -7311620450240003897,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '15bBSCJet3GiZYjP',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 22,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '6PyS45OjfuTkozMW',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 21,
					),
					paid_stars_total : -787979107659065695,
				),
			),
			version : 11,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -5990269016632056715,
			),
			call : $client->groupCallDiscarded(
				id : -8654373853487205920,
				access_hash : 3193166183397442861,
				duration : 66,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -760684312248521323,
			),
			ttl_period : 73,
		),
		$client->updateChatParticipant(
			chat_id : -4279581040423031536,
			date : 73,
			actor_id : 2708475727543223374,
			user_id : 7332232460310854404,
			prev_participant : $client->chatParticipant(
				user_id : -3125408332738122740,
				inviter_id : 7460059994774736248,
				date : 9,
				rank : 'ZGscIYHxBaUb3vrD',
			),
			new_participant : $client->chatParticipant(
				user_id : 1779621427916454689,
				inviter_id : -4644951653495031983,
				date : 39,
				rank : '6EPOnJYLrwUpS2kB',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'OLdZ1EQ46uA7oUfk',
				admin_id : 6669100745930863529,
				date : 72,
				start_date : 27,
				expire_date : 95,
				usage_limit : 82,
				usage : 33,
				requested : 29,
				subscription_expired : 95,
				title : 'fJoqwdtHRX7ETSzL',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 91,
					amount : -1529135938401743436,
				),
			),
			qts : 100,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 4109867927530817227,
			date : 88,
			actor_id : 96705544999829895,
			user_id : 8169094036574169899,
			prev_participant : $client->channelParticipant(
				user_id : -3889068361060980984,
				date : 94,
				subscription_until_date : 33,
				rank : 'ZLQKbX4Rjc80sMYo',
			),
			new_participant : $client->channelParticipant(
				user_id : 8885090005903625368,
				date : 32,
				subscription_until_date : 94,
				rank : 'pIF6tx2Bo78S9NVi',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'l8QRHaFvzWnfpELt',
				admin_id : -7709826662489971938,
				date : 74,
				start_date : 52,
				expire_date : 81,
				usage_limit : 51,
				usage : 21,
				requested : 13,
				subscription_expired : 83,
				title : 'OiNIh5bUfBM7Pu4o',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 66,
					amount : -8679467479546797384,
				),
			),
			qts : 52,
		),
		$client->updateBotStopped(
			user_id : -7473103147526780924,
			date : 51,
			stopped : false,
			qts : 72,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'eY7joWgcPAb4KxnQ',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 3877625529049531920,
			),
			bot_id : 4215715000991971240,
			commands : array(
				$client->botCommand(
					command : 'ombCR7eKrh9PW4w5',
					description : 'mxLKdHYE4uvyacBS',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 6607836863443671282,
			),
			requests_pending : 97,
			recent_requesters : array(-1955485899080330655),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -7399562742986769982,
			),
			date : 36,
			user_id : 6376282718130947082,
			about : '7LKE5mVn9TiQGvNS',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'lDseoI6ZitmWcj8r',
				admin_id : -4087960236149185823,
				date : 72,
				start_date : 10,
				expire_date : 82,
				usage_limit : 15,
				usage : 48,
				requested : 4,
				subscription_expired : 51,
				title : 'pB8uV2NXcRG6DYTP',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 2,
					amount : -9078090369786192077,
				),
			),
			qts : 19,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 5227779129439671835,
			),
			msg_id : 79,
			top_msg_id : 2,
			saved_peer_id : $client->peerUser(
				user_id : -1076878551449998126,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 20,
						reaction : $client->reactionEmpty(...),
						count : 39,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 69,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 87,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -1425652831861751732,
		),
		$client->updateBotMenuButton(
			bot_id : 7929799451546292482,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 6226718318484671015,
			),
			msg_id : 56,
			transcription_id : -8165726789054768633,
			text : 'qjRSNBuwpfGdAKUn',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -5092878328120443471,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -8215164305808761555,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 5132710361915438540,
			),
			msg_id : 8,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 32,
					h : 42,
					thumb : $client->photoSizeEmpty(
						type : 'n7xdMZIeqb95DQfU',
					),
					video_duration : 64,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -7801159249347396261,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 8453858314476032322,
			),
			story : $client->storyItemDeleted(
				id : 60,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -6182976013830324428,
			),
			max_id : 72,
		),
		$client->updateStoryID(
			id : 27,
			random_id : 2175705134867785330,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 34,
				cooldown_until_date : 52,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -1138799991155798997,
			),
			story_id : 76,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -964881202017480400,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : '0I9UCwqxRY3GaSbM',
				user_id : -3240742996546963561,
				giveaway_msg_id : 43,
				date : 60,
				expires : 14,
				used_gift_slug : 'fXAdjBVFe9ctU3PM',
				multiplier : 42,
				stars : -285043841637395013,
			),
			qts : 37,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -4744697602022929441,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -7411520712136815059,
			),
			wallpaper : $client->wallPaper(
				id : 477919735675651253,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 9138807758157798338,
				slug : '8dX7YTE91ix4rAJZ',
				document : $client->documentEmpty(
					id : 6372833233399381176,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 9,
					second_background_color : 20,
					third_background_color : 94,
					fourth_background_color : 63,
					intensity : 66,
					rotation : 20,
					emoticon : '8TDH59JYcqVvQlWn',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 8946182068191408184,
			),
			msg_id : 77,
			date : 42,
			actor : $client->peerUser(
				user_id : -8108570219790219165,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'VRsNoSJvygQBFncE',
				),
				$client->reactionCustomEmoji(
					document_id : -5819711339958493678,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'GE9qeJya1mslU4vR',
				),
				$client->reactionCustomEmoji(
					document_id : -3666086093485080500,
				),
				$client->reactionPaid(),
			),
			qts : 55,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -1038439449859022294,
			),
			msg_id : 57,
			date : 38,
			reactions : array(
				$client->reactionCount(
					chosen_order : 26,
					reaction : $client->reactionEmpty(),
					count : 4,
				),
			),
			qts : 35,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 1229286617888704368,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -5296054499477330365,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 87,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'ch58djGeIzFmX7fi',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 73,
					shortcut : 'jNWAU8CFP7xdG60D',
					top_message : 92,
					count : 12,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 14,
				shortcut : 'DTZXWpCVwL2aORm3',
				top_message : 23,
				count : 64,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 18,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 64,
				peer_id : $client->peerUser(
					user_id : 5400362809593364450,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 74,
			messages : array(26),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'Hb7LSkIVcf6Ddsp2',
				user_id : 4313373556368517386,
				dc_id : 75,
				date : 84,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 22,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'uTkzdXq6gvlBV3It',
			message : $client->messageEmpty(
				id : 82,
				peer_id : $client->peerUser(
					user_id : 1037132278829359093,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 42,
				peer_id : $client->peerUser(
					user_id : -876020384470656499,
				),
			),
			qts : 38,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'l15maApH9urOZsSb',
			message : $client->messageEmpty(
				id : 42,
				peer_id : $client->peerUser(
					user_id : 7012702144684341678,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 34,
				peer_id : $client->peerUser(
					user_id : -8973670408895107794,
				),
			),
			qts : 25,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'O8duL3sDPelxHpKY',
			peer : $client->peerUser(
				user_id : -5709712983281364205,
			),
			messages : array(70),
			qts : 84,
		),
		$client->updateNewStoryReaction(
			story_id : 82,
			peer : $client->peerUser(
				user_id : 5797385164558160032,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 796198920137096171,
				nanos : 73,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -3252949670531153240,
			user_id : 5202187527231200697,
			connection_id : 'rW4mbpS0ETP1d56x',
			message : $client->messageEmpty(
				id : 63,
				peer_id : $client->peerUser(
					user_id : 7171911890216578888,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 49,
				peer_id : $client->peerUser(
					user_id : -2368379556632606894,
				),
			),
			chat_instance : -748942714974311582,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 357132297182987701,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 1495539931146819797,
					nanos : 91,
				),
				available_balance : $client->starsAmount(
					amount : -4638158635272460855,
					nanos : 41,
				),
				overall_revenue : $client->starsAmount(
					amount : 7388713295405066250,
					nanos : 98,
				),
				next_withdrawal_at : 84,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -2637706459472097757,
			payload : 'ZL1BPizmn0DUVHf8',
			qts : 11,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 64,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 24,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 961541947501842437,
				access_hash : -9178784454594795173,
			),
			sub_chain_id : 90,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 97,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -6556002078287264986,
			saved_peer_id : $client->peerUser(
				user_id : -5970947755619998276,
			),
			read_max_id : 88,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -4748340243785622040,
			saved_peer_id : $client->peerUser(
				user_id : -366544735976193261,
			),
			read_max_id : 15,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 5950617450895596240,
			saved_peer_id : $client->peerUser(
				user_id : 6224760879725793254,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -548193764886698695,
				access_hash : 8643273784086928667,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 69,
				from_id : $client->peerUser(
					user_id : -1313892206368958191,
				),
				date : 62,
				message : $client->textWithEntities(
					text : 'OCSEhMd87rTAnQsq',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				paid_message_stars : 8068044402948276853,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 4269280247336525915,
				access_hash : 6461888776357017688,
			),
			from_id : $client->peerUser(
				user_id : -3113778569694519855,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 9125857088638697554,
			),
			topic_id : 60,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -9146709225267658971,
			),
			order : array(5),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -6985984296764245706,
				access_hash : 8425361073548316600,
			),
			messages : array(18),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -635690590045448182,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : 2592062019152180941,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -6159821786275562594,
				bid_date : 40,
				min_bid_amount : 2599628759134086565,
				bid_peer : $client->peerUser(
					user_id : 9105105021959087795,
				),
				acquired_count : 10,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
		$client->updateChatParticipantRank(
			chat_id : 1813451786046874041,
			user_id : 1506195858760247676,
			rank : '6nfYhJX7BLsuZQeH',
			version : 85,
		),
		$client->updateManagedBot(
			user_id : -2203087971798273770,
			bot_id : -3275724834063710074,
			qts : 24,
		),
		$client->updateBotGuestChatQuery(
			query_id : 3144401319638995724,
			message : $client->messageEmpty(
				id : 75,
				peer_id : $client->peerUser(
					user_id : -7333830731724746185,
				),
			),
			reference_messages : array(
				$client->messageEmpty(
					id : 26,
					peer_id : $client->peerUser(
						user_id : -1291633070004837216,
					),
				),
				$client->message(
					out : true,
					mentioned : true,
					media_unread : true,
					silent : true,
					post : true,
					from_scheduled : true,
					legacy : true,
					edit_hide : true,
					pinned : true,
					noforwards : true,
					invert_media : true,
					offline : true,
					video_processing_pending : true,
					paid_suggested_post_stars : true,
					paid_suggested_post_ton : true,
					id : 35,
					from_id : $client->peerUser(
						user_id : 6596013843047345129,
					),
					from_boosts_applied : 73,
					from_rank : '2gtzVsH9l53NIfe7',
					peer_id : $client->peerUser(
						user_id : 748097506730704275,
					),
					saved_peer_id : $client->peerUser(
						user_id : -1488192812154058554,
					),
					fwd_from : $client->messageFwdHeader(
						imported : true,
						saved_out : true,
						from_id : $client->peerUser(...),
						from_name : 'Dz0j3snGyH9TbFKP',
						date : 48,
						channel_post : 49,
						post_author : 'qjpm8wTLxfE4OyAz',
						saved_from_peer : $client->peerUser(...),
						saved_from_msg_id : 79,
						saved_from_id : $client->peerUser(...),
						saved_from_name : 'Ml7Sg3qxGYs6zpnV',
						saved_date : 4,
						psa_type : 'vkCuJf3r4Lcyq9pB',
					),
					via_bot_id : -7712725421056970102,
					via_business_bot_id : -7304761615964511420,
					guestchat_via_from : $client->peerUser(
						user_id : -1800401491309836117,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_msg_id : 56,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 33,
						quote_text : '4RY5vkpLDuwAtfPo',
						quote_entities : array(
							$client->messageEntityUnknown(...),
							$client->messageEntityMention(...),
							$client->messageEntityHashtag(...),
							$client->messageEntityBotCommand(...),
							$client->messageEntityUrl(...),
							$client->messageEntityEmail(...),
							$client->messageEntityBold(...),
							$client->messageEntityItalic(...),
							$client->messageEntityCode(...),
							$client->messageEntityPre(...),
							$client->messageEntityTextUrl(...),
							$client->messageEntityMentionName(...),
							$client->inputMessageEntityMentionName(...),
							$client->messageEntityPhone(...),
							$client->messageEntityCashtag(...),
							$client->messageEntityUnderline(...),
							$client->messageEntityStrike(...),
							$client->messageEntityBankCard(...),
							$client->messageEntitySpoiler(...),
							$client->messageEntityCustomEmoji(...),
							$client->messageEntityBlockquote(...),
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 62,
						todo_item_id : 64,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 99,
					message : 'gvAi0Ymh12a3zK8E',
					media : $client->messageMediaEmpty(),
					reply_markup : $client->replyKeyboardHide(
						selective : true,
					),
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 4,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 76,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 22,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 41,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 98,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 45,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 72,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 46,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 11,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 79,
							language : 'Ri6k3zaousnmeOpw',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 6,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 82,
							user_id : -6255827146099677866,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 67,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 23,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 94,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 25,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 41,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 2,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 19,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 35,
							document_id : 1843945095783699153,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 46,
						),
						$client->messageEntityFormattedDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							offset : 0,
							length : 24,
							date : 45,
						),
						$client->messageEntityDiffInsert(
							offset : 0,
							length : 57,
						),
						$client->messageEntityDiffReplace(
							offset : 0,
							length : 30,
							old_text : 'dUR1PZKDcIXes0mq',
						),
						$client->messageEntityDiffDelete(
							offset : 0,
							length : 56,
						),
					),
					views : 43,
					forwards : 5,
					replies : $client->messageReplies(
						comments : true,
						replies : 33,
						replies_pts : 75,
						recent_repliers : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
						channel_id : -4850144725748578945,
						max_id : 25,
						read_max_id : 87,
					),
					edit_date : 42,
					post_author : 'HqpxA3i5doGZ0B7D',
					grouped_id : 825187532530483545,
					reactions : $client->messageReactions(
						min : true,
						can_see_list : true,
						reactions_as_tags : true,
						results : array(
							$client->reactionCount(...),
						),
						recent_reactions : array(
							$client->messagePeerReaction(...),
						),
						top_reactors : array(
							$client->messageReactor(...),
						),
					),
					restriction_reason : array(
						$client->restrictionReason(
							platform : '5Z1L4lkd6xjMOTDQ',
							reason : 'ovrBi32fmV5P0yZg',
							text : 'WZP1FzGsDE3l6jQK',
						),
					),
					ttl_period : 28,
					quick_reply_shortcut_id : 73,
					effect : 8624019601353501733,
					factcheck : $client->factCheck(
						need_check : true,
						country : 'IOcmd8ueqWXExNFa',
						text : $client->textWithEntities(...),
						hash : 0,
					),
					report_delivery_until_date : 68,
					paid_message_stars : 4995180472343996745,
					suggested_post : $client->suggestedPost(
						accepted : true,
						rejected : true,
						price : $client->starsAmount(...),
						schedule_date : 97,
					),
					schedule_repeat_period : 56,
					summary_from_language : 'CmOkLw7d6Ki8zGxX',
				),
				$client->messageService(
					out : true,
					mentioned : true,
					media_unread : true,
					reactions_are_possible : true,
					silent : true,
					post : true,
					legacy : true,
					id : 25,
					from_id : $client->peerUser(
						user_id : -5332337984883406667,
					),
					peer_id : $client->peerUser(
						user_id : -5739231210237507171,
					),
					saved_peer_id : $client->peerUser(
						user_id : -2590719572503489493,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_msg_id : 87,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 72,
						quote_text : 'VPqY9a3gct2GUw7I',
						quote_entities : array(
							$client->messageEntityUnknown(...),
							$client->messageEntityMention(...),
							$client->messageEntityHashtag(...),
							$client->messageEntityBotCommand(...),
							$client->messageEntityUrl(...),
							$client->messageEntityEmail(...),
							$client->messageEntityBold(...),
							$client->messageEntityItalic(...),
							$client->messageEntityCode(...),
							$client->messageEntityPre(...),
							$client->messageEntityTextUrl(...),
							$client->messageEntityMentionName(...),
							$client->inputMessageEntityMentionName(...),
							$client->messageEntityPhone(...),
							$client->messageEntityCashtag(...),
							$client->messageEntityUnderline(...),
							$client->messageEntityStrike(...),
							$client->messageEntityBankCard(...),
							$client->messageEntitySpoiler(...),
							$client->messageEntityCustomEmoji(...),
							$client->messageEntityBlockquote(...),
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 91,
						todo_item_id : 39,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 48,
					action : $client->messageActionEmpty(),
					reactions : $client->messageReactions(
						min : true,
						can_see_list : true,
						reactions_as_tags : true,
						results : array(
							$client->reactionCount(...),
						),
						recent_reactions : array(
							$client->messagePeerReaction(...),
						),
						top_reactors : array(
							$client->messageReactor(...),
						),
					),
					ttl_period : 35,
				),
			),
			qts : 23,
		),
		$client->updateAiComposeTones(),
	),
	chats : array(
		$client->chatEmpty(
			id : -7293086728521902624,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2814366522160154328,
			title : 'emxGvP4yjIETlqSY',
			photo : $client->chatPhotoEmpty(),
			participants_count : 10,
			date : 49,
			version : 7,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 76,
			),
		),
		$client->chatForbidden(
			id : -862937770694242999,
			title : 'd4VepNuyCMia2ZcI',
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
			id : -5549173132036822999,
			access_hash : 7807294227603388762,
			title : 'VI6QfMclbrCFeT5j',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'SlPg0BApV8kaoLtY',
					reason : 'Q5Rc16tlI9usDTYV',
					text : 'Sx1YzlqfNHVATuRU',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 73,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 11,
			),
			participants_count : 42,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 98,
			),
			color : $client->peerColor(
				color : 70,
				background_emoji_id : -242220957480298499,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : -2575862768516648123,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 72,
			subscription_until_date : 51,
			bot_verification_icon : -6378424495603929387,
			send_paid_messages_stars : -2202752603028490340,
			linked_monoforum_id : -3889393319750703837,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 5894583405430936783,
			access_hash : 1660475584812647592,
			title : 'Tq21pO3e8kbndZN7',
			until_date : 54,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2088142547349643998,
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
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			id : -8824352874005786648,
			access_hash : 7132259128744436127,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 3,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IxgdQaS3Pv0GpbXT',
					reason : 'WFrfC2mdBzQ4E5Uv',
					text : 'HpODIhkEaAjtKNQ4',
				),
			),
			bot_inline_placeholder : '5Qn4oSqykp1BPdOl',
			lang_code : '1mR6WJh9yw7eBdSA',
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
				max_id : 56,
			),
			color : $client->peerColor(
				color : 93,
				background_emoji_id : -8688514721536070415,
			),
			profile_color : $client->peerColor(
				color : 40,
				background_emoji_id : 970204340842144771,
			),
			bot_active_users : 52,
			bot_verification_icon : -1396411180934188623,
			send_paid_messages_stars : -8556285619563767845,
		),
	),
	state : $client->updates->state(
		pts : 65,
		qts : 21,
		date : 80,
		seq : 3,
		unread_count : 25,
	),
);
```