<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Pancake
 *
 * A simple, fast, self-hosted invoicing application
 *
 * @package		Pancake
 * @author		Pancake Dev Team
 * @copyright	Copyright (c) 2010, Pancake Payments
 * @license		http://pancakeapp.com/license
 * @link		http://pancakeapp.com
 * @since		Version 1.0
 */

// ------------------------------------------------------------------------

$lang = array(

	/** Global Words **/
	'global:overview'                 => 'Vue d\'ensemble',
	'global:error'                    => 'Erreur',
	'global:pancakeby7am'             => 'Pancake :1 by :2',
	'global:allrelatedmediacopyright' => 'Tous droits réservés par Copyright :1 pour :2',
	'global:insecure_action'          => 'Activité douteuse bloquée',
	'global:disabled_in_demo'         => 'Certaines fonctionnalités sur cette page sont désactivées pour la démo.',
	'global:estimates'                => 'Devis',
	'global:estimate'                 => 'Devis',
	'global:projects'                 => 'Projets',
	'global:project'                  => 'Projet',
	'global:upload_failed'            => 'Un problème est survenu lors de l\'upload du fichier. Veuillez réessayer. Si le problème persiste, veuillez contacter support@pancakeapp.com.',
	'global:upload_not_allowed'       => 'Le type de fichier en cours d\'upload n\'est pas autorisé. Si vous devez uploader un fichier de ce type, veuillez le compresser dans un fichier .zip ou toute autre format d\'archive qui vous semblera approprié.',
	'global:copied'                   => 'Copié !',
	'global:sentbutunpaid'            => 'En suspens (envoyée mais non réglée)',
	'global:task'                     => 'Tâche',
	'global:clients'                  => 'Clients',
	'global:users'                    => 'Utilisateurs',
	'global:send_to_client'           => 'Envoyer au client',
	'global:couldnotsendemail'        => 'Impossible d\'envoyer l\'email. Veuillez vérifier les paramètres.',
	'global:emailsent'                => 'L\'email a été envoyé !',
	'global:yes'                      => 'Oui',
	'global:no'                       => 'Non',
	'global:notyetsent'               => 'Non envoyée au client',
	'global:dontshowagain'            => "Ne plus afficher",
	'global:enable'                   => 'Activer',
	'global:is_enabled'               => 'Activé ?',
	'global:is_completed'             => 'Terminé ?',
	'global:Y'                        => 'O',
	'global:N'                        => 'N',
	'global:notes'                    => 'Notes',
	'global:description'              => 'Description', 
	'global:backtoadmin'              => 'Retour à l\'admin',
	'global:type'                     => 'Type',
	'global:name'                     => 'Nom',
	'global:first_name'               => 'Prénom',
	'global:last_name'                => 'Nom',
	'global:company'                  => 'Société',
	'global:for'                      => 'pour',
	'global:from'                     => 'de',
	'global:phone'                    => 'Téléphone',
	'global:email'                    => 'Email',
	'global:contacts'                 => 'Contacts',
	'global:week'                     => 'Hebdomadaire',
	'global:quarterly'                => 'Trimestriel',
	'global:every_six_months'         => 'Tous les 6 mois',
	'global:biyearly'                 => 'Tous les 2 ans',
	'global:month'                    => 'Mensuel',
	'global:year'                     => 'Annuel',
	'global:fax'                      => 'Fax',
	'global:mobile'                   => 'Mobile',
	'global:address'                  => 'Adresse',
	'global:api_key'                  => 'Clé d\'API',
	'global:website'                  => 'Site web',
	'global:action'                   => 'Action',
	'global:items'                    => 'Article',
	'global:reusableinvoiceitems'     => 'Articles réutilisables',
	'global:createinvoice'            => 'Créer une facture',
	'global:paid'                     => 'Réglée',
	'global:unpaid'                   => 'Non réglée',
	'global:overdue'                  => 'Échue',
	'global:time_entries'             => 'Entrées de temps',
	'global:invoices'                 => 'Factures',
	'global:invoice'                  => 'Facture',
	'global:estimate'                 => 'Devis',
	'global:dashboard'                => 'Tableau de bord',
	'global:settings'                 => 'Paramètres',
	'global:changepassword'           => 'Modifier le mot de passe',
	'global:logout'                   => 'Déconnexion',
	'global:status'                   => 'Statut',
	'global:client'                   => 'Client',
	'global:user'                     => 'Utilisateur',
	'global:title'                    => 'Titre',
	'global:subtitle'                 => 'Sous titre',
	'global:to'                       => 'À',
	'global:subject'                  => 'Sujet',
	'global:thanks'                   => 'Merci !',
	'global:proposals'                => 'Propositions',
	'global:proposal'                 => 'Proposition',
	'global:reports'                  => 'Rapports',
	'global:item'                     => 'Article',
	'global:report'                   => 'Rapport',
	'global:saveandinsert'            => 'Sauvegarder et insérer',
	'global:details'                  => 'Détails',
	'global:license_key'              => 'Clé de licence',
	'global:version'                  => 'Version',
	'global:content'                  => 'Contenu',
	'global:add'                      => 'Ajouter',
	'global:edit'                     => 'Éditer',
	'global:resend'                   => 'Renvoyer',
	'global:sent'                     => 'Envoyé',
	'global:not_sent'                 => 'Non envoyé',
	'global:view'                     => 'Voir',
	'global:delete'                   => 'Supprimer',
	'global:remove'                   => 'Enlever',
	'global:sort'                     => 'Trier',
	'global:deleteitem'               => 'Suprimer l\'article',
	'global:dragtoreorder'            => 'Glisser pour réordonner',
	'global:start'                    => 'Démarrer',
	'global:stop'                     => 'Stopper',
	'global:created'                  => 'Créé',
	'global:updated'                  => 'Mis à jour',
	'global:update'                   => 'Mettre à jour',
	'global:downloadpdf'              => 'Télécharger en PDF',
	'global:yesdelete'                => 'Oui, supprimer !',
	'global:confirm_emphisised'       => 'Il n\'y a pas de retour en arrière possible !',
	'global:color'                    => 'Couleur',
	'global:save'                     => 'Sauvegarder',
	'global:unknown'                  => 'Inconnu',
	'global:upload_ini_size'          => 'Le fichier que vous avez uploadé a dépassé la taille limite imposée par votre installation PHP.',
	'global:upload_error'             => 'Un problème est survenu lors de l\'upload de votre fichier. Veuillez réessayer.',
	'global:recurring'                => 'Récurrente',
	'global:unsent'                   => 'Non envoyée',
	'global:converttoinvoice'         => 'Convertir en facture',
	'global:viewpdf'                  => 'Voir en PDF',
	'global:duplicate'                => 'Dupliquer',
	'global:urltosend'                => 'Voici l\'url à envoyer :',
	'global:copytoclipboard'          => 'Copier dans le presse-papiers',
	
	
	'global:optional_increment'       => '<strong>Optionnel</strong> - incrémentation automatique',

	'login:ahoy'                      => 'Salut !',
	'login:readytodothis'             => 'Prêt à faire ça ?',
	'login:sup'                       => 'Quoi de neuf ?',
	'global:actions'                  => 'Actions',


	/** Greetings **/
	'global:greetings'                => array('Salut !', 'Bonjour,', 'Coucou,', 'Quoi de neuf,'),
	/** End Greetings **/

	/** Dashboard **/	
	'dashboard:collected'             => 'Encaissé',
	'dashboard:outstanding'           => 'Impayé',
	'dashboard:latest_activity'       => 'Dernière activité',
	'dashboard:upcoming_tasks'        => 'Tâches à venir',
	/** End Dashboard **/


	/** Users **/

	// ==============================
	// = LOGIN PAGE COMPLETED - Lee =
	// ==============================
	'login:forgotinstructions'        => 'Veuillez saisir votre adresse email pour que nous puissions vous envoyer un email afin de réinitialiser votre mot de passe.',
	'login:reset'                     => 'Réinitialiser &raquo;',
	'login:reset'                     => 'Réinitialiser le mot de passe',
	'login:username'                  => 'Pseudo',
	'login:password'                  => 'Mot de passe',
	'login:changepassword'            => 'Mettre à jour le mot de passe',
	'login:email'                     => 'Adresse email',
	'login:login'                     => 'Connexion',
	'login:logout'                    => 'Déconnexion',
	'login:remember'                  => 'Se souvenir de moi',
	'login:forgot'                    => 'Mot de passe oublié ?',
	'login:cancel'                    => '&laquo; Annuler',
	/** End Users **/

	/** Clients **/
	'clients:title'				=>	'Tous les clients',
	'clients:filter'			=>	'Filtre clients',
	'clients:add'				=>	'Ajouter un client',
	'clients:edit'				=>	'Mettre à jour',
	'clients:noclienttitle' 	=> 'Vous devez saisir des clients !',
	'clients:noclientbody'		=> 	'De manière à leur envoyer des factures. En ajouter un maintenant ?',	
	'clients:hasnoinvoicetitle' =>	'Super ! Ce client est en place !',
	'clients:hasnoinvoicebody'	=> 	'Créons un devis pour lui et commencons à facturer ! En ajouter un maintenant ?',
	'clients:added' 			=> 'Le client a été ajouté !',
	'clients:edited' 			=> 'Le client a été mis à jour !',
	'clients:deleted' 			=> 'Le client a été supprimé !',
	'clients:does_not_exist' 	=> 'Ce client n\'existe pas !',
	'clients:health_check'		=> 	'Bilan de santé',	
	'clients:all' 				=> 'Tous',
	'clients:delete_title'		=>	'Supprimer ce client ?!?!',
	'clients:delete_message'	=>	'Etes-vous sûr de supprimer ce client ?<br />Cela supprimera aussi toutes les factures, tous les projets et toutes les propositions faites à ce client.',
	'clients:clientaction'		=>	'&nbsp;',
	'clients:passphrase'		=> 'Phrase secrète',
	'clients:bad_passphrase'	=> 'La phrase secrète est incorrect.',
	/** End Clients **/
	
	
	/** Contact Log **/
	'contact:title'			=>	'Historique des contacts',
	'contact:method'		=>	'Méthode de contact',
	'contact:contact'		=>	'Contact',
	'contact:subject'		=>	'Sujet',
	'contact:content'		=>	'Contenu',
	'contact:method'		=>	'Méthode de contact',
	'contact:calling_title'	=>	'Appel du client ":1"',
	// 'contact:view_all'		=>	'View All',
	/** End Contact Log **/

	/** Invoices **/
	'invoices:markassent' => 'Marquer comme envoyée',
	'invoices:invoicedate' => 'Date de la facture',
	'invoices:sentbutunpaid' => 'Factures envoyéees au client mais pas encore réglées',
	'invoices:duplicated' => 'Dupliquer la facture n°:1. Le nouveau numéro de facture est le n°:2.',
	'invoices:all'		=>	'Toutes les factures',
	'invoices:empty'	=>	'Pas encore de factures.',
	'invoices:overdue'	=>	'Factures échues',
	'invoices:paid'		=>	'Factures réglées', 
	'invoices:recurringinvoices' => 'Factures récurrentes',
	'invoices:unsentinvoices' => 'Factures non envoyées',
	'invoices:unpaid'	=>	'Factures impayées',
	'invoices:thisinvoicewaspaidon' => 'Cette facture a été réglée le :1. Merci !',
	'invoices:senton' => 'Envoyée le :1',
	'invoices:paidon' => 'Réglée le :1',
	'invoices:paidonsingle'	=>	'Réglée le',
	'invoices:thisinvoiceisunpaid' => "Cette facture n'a pas encore été réglée.",
	'invoices:noinvoicetitle'	=>	'Vous n\'avez pas encore de facture !',
	'invoices:noinvoicebody'	=>	'Vous devriez créer une facture pour votre client maintenant ! <br /> Les clients adorent les factures !',
	'invoices:send_now_title' => 'Envoyer la facture maintenant ?',
	'invoices:send_now_body' => 'Remplissez le formulaire cide ssous et nous enverrons cette facture pour vous.',
	'invoices:newinvoice'	=>	'Créer une facture',
	'invoices:send_now' => 'Envoyer la facture',
	'invoices:timequantity' => 'Temps/Quantité',
	'invoices:ratewithcurrency' => 'Taux (:1)',
	'invoices:taxable' 	=> 'Imposable',
	'invoices:total' 	=> 'Total',
	'invoices:amount'	=>	'Montant',
	'invoices:due'		=>	'Dû',
	'invoices:subtotal' => 'Sous total',
	'invoices:totaltax' => 'Total des taxes',
	'invoices:filestodownload' => 'Fichiers à télécharger',
	'invoices:added' => 'La facture a été ajoutée !',
	'invoices:fileswillbeavailableafterpay' => 'Ces fichiers seront disponibles au téléchargement une fois que la facture aura été complètement réglée.',
	'invoices:no_payment_gateways_enabled' => 'Aucun moyen de paiement n\'a été activé, ce qui risque de compliquer le réglement de la facture... Vérifiez vos <a href=":1">Paramètres</a>',
	'invoices:invoicenumber' => 'Facture n°:1',
	'invoices:number' => 'Facture n°',
	'invoices:type'	=>	'Type de facture',
	'invoices:is_recurring' => 'Récurrente ?',
	'invoices:is_paid' => 'Réglée ?',
	'invoices:is_sent' => 'Envoyée ?',
	'invoices:date_entered' => 'Date de création',
	'invoices:delete_title'	=>	'Supprimer cette facture ?',
	'invoices:delete_message'	=>	'Etes-vous sûr de vouloir supprimer cette facture ?',
	'invoices:create' => 'Créer une facture',
	'invoices:edit' => 'Éditer la facture',
	'invoices:amountrequired' => 'Le champ Montant est obligatoire',
	'invoices:currencydoesnotexist' => 'Cette devise n\'existe pas.',
	'invoices:unique_id' => 'Identifiant unique',
	'invoices:willreoccurin' => 'Cette facture se répètera le :1.',
	'invoices:willbesentautomatically' => 'Le client sera notifié par email au sujet de cette facture le :1.',
	'invoices:thisisareoccurrence' => 'Cette facture est une récurrence de :1.',
	'invoices:clientlastnotifiedon' => 'Le client a été notifié par email au sujet de cette facture le :1.',
	'invoices:simple' => 'Simple',
	'invoices:simple_help' => 'Une facture simple n\'a pas de lignes d\'articles. Juste un total.',
	'invoices:detailed' => 'Détaillée',
	'invoices:detailed_help' => 'Une facture détaillée vous permet d\'avoir plusieurs lignes d\'articles.',
	'invoices:estimate_help' => 'Les devis sont des factures détaillées qui ne sont pas encaissables.',
	'invoices:unpaid_totalamount'	=>	'Impayé / Montant total',
	'invoices:saveinvoice' => 'Sauvegarder la facture',
	'invoices:deleted' => 'La facture a été supprimée !',
	'invoices:view' => 'Voir la facture',
	'invoices:is_viewable'	=>	'Montrer dans l\'espace Client ?',
	'invoices:no_invoices' => 'Il n\'y a pas de factures.',
	'invoices:addedsuccess'	=>	'Vous avez ajouté une facture pour',
	'invoices:invoice'	=>	'facture',
	'invoices:addedconf'	=>	'Vous avez ajouté la facture n°<strong>:1</strong>, totalisant <strong>:2</strong> pour :3:4.',
	'invoices:preview'	=>	'Prévisualiser la facture',
	'invoices:editinvoice'	=>	'Editer la facture n°:1',
	'invoices:messageupdated'	=>	'La facture a été mise à jour !',
	'invoices:resend'	=>	'Renvoyer la facture',
	/** End Invoices **/

	/** Estimates **/
	'estimates:attachedtoproposal' => 'Attaché à la proposition n°:1',
	'estimates:duplicated' => 'Devis n°:1 dupliqué. Le nouveau numéro de devis est le n°:2.',
	'estimates:alltitle'	=>	'Tous les devis',
	'estimates:attachingtoproposal' =>     'Devis en cours d\'attache à la proposition, veuillez patienter...',
	'estimates:delete_title'	=>	'Supprimer ce devis ?',
	'estimates:delete_message'	=>	'Etes-vous sûr de vouloir de supprimer ce devis ?',
	'estimates:createnew'	=>	'Créer un nouveau devis',
	'estimates:converted' => 'Devis #:1 converti en facture.',
	'estimates:noestimatetitle'	=>	'Vous n\'avez aucun devis',
	'estimates:noestimatesforthisclient'	=>	'Vous n\'avez aucun devis pour ce client.',
	'estimates:deleted' => 'Ce devis a été supprimé !',
	'estimates:noestimatebody'	=>	'Continuons comme un devis ! Voulez-vous en créer un maintenant ?',
	'estimates:estimatenumber'	=>	'Devis n°:1',
	'estimates:view' => 'Voir le devis',
	'estimates:no_estimates' => 'Il n\'y a pas de devis.',
	'estimates:addedsuccess'	=>	'Vous avez ajouté un devis pour',
	'estimates:estimate'	=>	'devis',
	'estimates:added'	=>	'Bravo ! Le devis a été ajouté.',
	'estimates:addedconf'	=>	'Vous aves ajouté le devis n°<strong>:1</strong>, totalisant <strong>:2</strong> pour :3:4.',
	'estimates:send_now_title' => 'Envoyer le devis maintenant ?',
	'estimates:send_now_body' => 'Remplissez le formulaire ci-dessous and nous enverrons ce devis pour vous.',
	'estimates:send_now'	=>	'Envoyer le devis',
	'estimates:edit'	=>	'Editer le devis',
	'estimates:preview'	=>	'Prévisualiser le devis',
	'estimates:editestimate'	=>	'Editer le devis n°:1',
	'estimates:messageupdated'	=>	'Le devis a été mis à jour !',
	'estimates:resend'	=>	'Renvoyer le devis',
	/** End Estimates **/

	/** Projects **/
	'projects:navigationitem' => 'Projets',
	'projects:hours_worked' => 'Nombre d\'heures travaillées',
	'projects:alltitle' =>	'>Tous les projets',
	'projects:noprojecttitle' => 'Il n\'y a pas encore de projets !',
	'projects:noprojecttext' => 'Voulez-vous en ajouter un maintenant ? ',
	'projects:add'	=> 'Créer un projet',
	'projects:doesnotexist' => 'Le projet auquel vous essayez d\'accéder n\'existe pas.',
	'projects:edit'	=> 'Editer le projet',
	'projects:delete'	=> 'Supprimer le projet',	
	'projects:project' => 'Projet',
	'projects:due_date' => 'Date d\'échéance',
	'projects:is_completed' => 'Terminé ?',
	'projects:areyousuredeletetask' => 'Etes-vous sûr de vouloir supprimer cette tâche ?',
	'projects:add_time' => 'Ajouter un temps',
	'projects:add_hours' => 'Ajouter des heures',
	'projects:generate_invoice' => 'Générer une facture',
	'projects:no_projects' => 'Il n\'y a pas de projet.',
	/** End Projects **/


	/** Milestones **/
	'milestones:add'	=> 'Ajouter une étape',
	'milestones:edit'	=> 'Editer l\'étape',
	'milestones:delete'	=> 'Supprimer l\'étape',	
	'milestones:milestone' => 'Etape',
	'milestones:target_date' => 'Date cible',
	'milestones:assigned_user' => 'Utilisateur assigné',
	'milestones:select_default' => '-- Pas d\'étape --',
	'milestones:no_milestone' => 'Tâches sans étape',
	'milestones:add_success' => 'Etape ":1" ajoutée avec succès !',
	'milestones:edit_success' => 'Etape ":1" éditée avec succès !',
	'milestones:add_failed' => 'L\'étape ":1" n\'a pas pu être ajoutée.',
	'milestones:edit_failed' => 'L\'étape ":1" n\'a pas pu être éditée.',
	'milestones:are_you_sure_delete' => 'Etes-vous sûr de vouloir supprimer cette étape ?',
	'milestones:delete_success' => 'Etape ":1" supprimée avec succès !',
	'milestones:does_not_exist' => 'Cette étape n\'existe pas.',
	'milestones:target_date'	=>	'Date cible',
	/** End Milestones **/

	/** Proposals **/
	'proposal:outline'	=>	'Grandes lignes de la proposition',


	/** End Proposals **/

	/** Reports **/
	'reports:perclient' => 'par client',
	'reports:datefrom' => 'De',
	'reports:allclients' => 'Tous les clients',
	'reports:dateto' => 'À',
	'reports:byclient' => 'Client',

	'reports:view' => 'Voir le Rapport',
	'reports:show_all' => 'Afficher les Rapports',
	'reports:nodata' => 'Pas de :1.',
	/** End Reports **/

	/** Currencies **/
	'currencies:default' => '[Par défaut] :1',
	'currencies:cad' => 'Canadian Dollar',
	'currencies:eur' => 'Euro',
	'currencies:usd' => 'U.S. Dollar',
	'currencies:gbp' => 'Pound Sterling',
	'currencies:hkd' => 'Hong Kong Dollar',
	'currencies:php' => 'Philippine Peso',
	'currencies:zar' => 'South Africa, Rand',
	/** End Currencies **/

	/** Proposals **/
	'proposals:duplicated' => 'Proposition n°:1 dupliquée. Le nouveau numéro de proposition est le n°:2.',
	'proposals:usesectiontemplate' => 'Utiliser ce modèle de section',
	'proposals:showcontents' => 'Voir le contenu',
	'proposals:hidecontents' => 'Masquer le contenu',
	'proposals:deletepremadesection' => 'Supprimer le modèle de section',
	'proposals:nopremadesections' => 'Vous n\'avez aucun modèle de section sauvegardé.',
	'proposals:newproposal' => 'Nouvelle proposition',
	'proposals:estimatexfory' => 'Devis n°:1 - :2',
	'proposals:number' => 'Proposition n°',
	'proposals:all' => 'Toutes les propositions',
	'proposals:noproposaltitle' => "Il n'y a aucune proposition !",
	'proposals:noproposalbody' => "Vous devriez créer une proposition maintenant. Vraiment.",
	'proposals:rejected' => 'Rejetée le :1',
	'proposals:accepted' => 'Acceptée le :1',
	'proposals:lastviewed' => 'Dernière visualisation par le client le :1, à :2',
	'proposals:neverviewed' => 'non visualisée par le client',
	'proposals:noanswer' => 'Pas de réponse',
	'proposals:createproposal' => 'Créer une proposition',
	'proposals:editproposal' => 'Editer la proposition',
	'proposals:createdsuccessfully' => 'Proposition créée !',
	'proposals:sections' => 'Sections',
	'proposals:section' => 'Section',
	'proposals:createsection' => 'Ajouter une nouvelle section',
	'proposals:createpage' => 'Ajouter une page',
	'proposals:emptysection' => '(sans titre)',
	'proposals:emptycontents' => '(pas de contenu)',
	'proposals:emptysubtitle' => '(pas de sous titre)',
	'proposals:for' => 'Proposition pour :',
	'proposals:pagexofcount' => 'Page :1 sur :2',
	'proposals:saving' => 'Sauvegarde en cours...',
	'proposals:save' => 'Sauvegarder',
	'proposals:savepremade' => 'Sauvegarder en tant que modèle de section',
	'proposals:addestimate' => 'Ajouter un devis',
	'proposals:saved' => 'Sauvegardée !',
	'proposals:createandedit' => 'Suivant : Editer le contenu de la proposition',
	'proposals:delete_message' => 'Etes-vous sûr de vouloir supprimer cette proposition ?',
	'proposals:createpremadesection' => 'Ajouter un modèle de section',
	'proposals:selected_attachments' => 'Selectionner un devis',
	'proposals:attach_selected_estimate' => 'Attacher le devis sélectionné',
	'proposals:proposal' => 'Proposition',
	'proposals:status' => 'Statut',
	'proposals:view' => 'Voir la proposition',
	'proposals:estimate' => 'Devis',
	'proposals:na' => 'N/A',
	'proposals:no_proposals' => 'Il n\'y a aucune proposition.',
	'proposals:kitchennotice' => 'Remarque : Les propositions apparaîtront dans la :1 une fois que le client aura suivi le lien vera la proposition. Cela signifie que que vous pouvez encore la modifier et le client ne la verra que lorsque vous le voudrez.',
	/** End Proposals **/

	/** Tasks **/
	'tasks:task' => 'Tâche',
	'tasks:edit_succeeded' => 'Tâche modifiée avec succès.',
	'tasks:hours' => 'Heures',
	'tasks:due_date' => 'Date d\'échéance',
	'tasks:is_completed' => 'Terminée ?',
	'tasks:timer' => 'Chronomètre',
	'tasks:rate' => 'Taux',
	'tasks:default_rate' => 'Taux par défaut',
	'tasks:entries' => 'Entrées temps',
	'tasks:view_entries' => 'Voir les entrées',
	'tasks:create' => "Ajouter une tâche",
	'tasks:edit' => "Editer la tâche",
	'tasks:create_succeeded' => "La tâche a été créée !",
	'tasks:no_task_title' => 'Hmm, pas encore de tâches...',
	'tasks:no_task_message' => 'Vous devriez en créer !',
	'tasks:is_viewable' => 'Visible dans l\'espace client ?',
	'tasks:no_milestones' => 'Tâches sans étape',
	
	/** Users **/
	'users:create_user' => 'Créer un utilisateur',
	
	/** Items **/
	'items:name' => 'Nom de l\'article',
	'items:description' => 'Description de l\'article',
	'items:qty_hrs' => 'Quantité / Heure',
	'items:quantity' => 'Quantité',
	'items:rate' => 'Taux',
	'items:tax_rate' => 'Taux d\'imposition',
	'items:cost' => 'Coût',
	'items:line_items' => 'Ligne d\'articles',
	'items:add' => 'Ajouter un article',
	'items:edit' => 'Editer l\'article',
	'items:noitemtitle'	=>	'Vous n\'avez pas encore d\'articles !',
	'items:noitembody'	=>	'Vous devriez ajouter des articles, cela rend la création de factures bien plus facile !',
	'items:delete_title'	=>	'Supprimer cet article ?',
	'items:delete_message'	=>	'Etes-vous sûr de vouloir supprimer l\'article ":1"?',

	/** Transactions **/
	'transactions:paymentcancelled' => 'Règlement annulé',
	'transactions:extrapaymentcancelled' => 'Votre règlement a été annulé.',
	'transactions:paymentreceived' => 'Règlement reçu !',
	'transactions:fee_applied' => 'Comme :1 impose des frais de transaction, nous avons ajouté un supplément de :2%.',
	'transactions:orderbeingprocessed' => 'Veuillez patienter, votre commande est en train d\'être traitée et vous allez être redirigé vers le site :1.',
	'transactions:ifyouarenotredirected' => 'Si vous n\'êtes pas automatiquement redirigé vers :1 d\'ici 5 secondes...',
	'transactions:thankyouforyourpayment' => 'Merci pour votre règlement. Vous allez recevoir un reçu par email sous peu.',
	'transactions:ifyouhavefilesyouwillgetanemail' => 'Si vous attendez une livraison de fichiers, vous recevrez un email avec un lien de téléchargement sous peu.',
	'transactions:ifyoudonotreceiveemail' => 'Si vous n\'avez pas reçu d\'email d\'ici une heure, veuillez contacter :1',
	/** End Transactions **/

	/** Timesheets **/
	'timesheet:taskname' => 'Nom de la tâche',
	'timesheet:starttime' => 'Date de début',
	'timesheet:endtime' => 'Date de fin',
	'timesheet:timeframe' => 'Délai',
	'timesheet:duration' => 'Durée',
	'timesheet:date' => 'Date',
	'timesheet:forproject' => 'Feuille de temps pour le projet ":1"',
	'timesheet:timesheet' => 'Feuille de temps',
	'timesheet:for' => 'Feuille de temps pour :',
	'timesheet:totalbillable' => 'Total d\'heures facturables',
	'timesheet:view_pdf' => 'Voir la feuille de temps',
	/** End Timesheets **/

	/** Frontend **/
	'frontend:hithere' => 'Bonjour à vous !',
	'frontend:followthemaillinkdude' => 'Pour voir votre facture, vous devez cliquer sur le lien complet qui se trouve dans l\'email que vous avez reçu. Par ex : :1.',
	'frontend:contactadminforassistance' => 'Veuillez suivre ces indications ou contactez :1 @ :2 pour demander de l\'aide.',

	/** End Frontend **/

	/** Settings **/
	'settings:pdf_page_size' => 'Taille de la page PDF',
    'settings:default_invoice_notes' => 'Notes de facture par défaut',
    'settings:default_invoice_title' => 'Titre de facture par défaut',
    'settings:testemailsettings' => 'Test configuration e-mail',
	'settings:kitchen_route' => 'Préfixe des liens d\'accès pour les clients',
	'settings:kitchen_route_explain' => "(Par ex. :1)",
	'settings:include_remittance_slip' => 'Bordereaux de paiement',
	'settings:include_remittance_slip_explain' => "Si vous le souhaitez, les factures PDF inclueront un bordereau de paiement.",
    'settings:items_per_page' => 'Élément par page',
    'settings:items_per_page_explain' => 'Nombre d\'élément (factures/devis/propositions/projets/tâches) à afficher par page.',
	'settings:send_x_days_before' => '"Envoyé x jours avant" par défaut',
	'settings:send_x_days_before_explain' => "Nombre de jours par défaut avant lesquels une facture récurrente est envoyée à un client.",
	'settings:file_to_import' => 'Fichier à importer',
	'settings:export_types' => 'Pancake exporte tout en format JSON.',
	'settings:file_should_be_csv' => 'Seuls les fichiers CSV et XML sont supportés.',
	'settings:importnow' => 'Importer !',
	'settings:whatimporting' => 'Qu\'êtes vous en train d\'importer ?',
	'settings:whatexporting' => 'Qu\'êtes vous en train d\'exporter ?',
	'settings:nouploadedimportfile' => 'Vous n\'avez pas uploadé de fichier à importer.',
	'settings:import' => 'Importer',
	'settings:importedclients' => 'Import de :1 clients avec succès.',
    'settings:importedinvoices' => 'Import de :1 facture avec succès.',
    'settings:xwereduplicates' => ':1 ont été dupliqués, et ont été ignorés.',
    'settings:import_desc' => 'Import de données dans Pancake.',
	'settings:export' => 'Exporter',
	'settings:exportnow' => 'Exporter !',
	'settings:importexport' => 'Importer / Exporter',
	'settings:removelogo' => 'Retirer le logo',
	'settings:wrong_license_key' => 'La clé de licence que vous avez saisie n\'est pas valide.',
	'settings:noopenssl' => 'Votre serveur PHP n\'est pas configuré pour OpenSSL, ce qui signifie que vous ne pouvez pas utiliser Gmail ou Google Applications pour envoyer des emails. Veuillez contacter votre hébergeur et dites lui que vous avez besoin d\'OpenSSL.',
	'settings:logoremoved' => 'Logo retiré avec succès !',
	'settings:save' => 'Sauvegarder les paramètres',
	'settings:logodimensions' => 'Le logo devrait faire 240 pixels de large pour 106 pixels de haut.',
	'settings:logoformatsallowed' => 'Les fichiers BMP, PNG, JPG (JPEG) et GIF sont autorisés.',
	'settings:ftp_user' => 'Utilisateur FTP',
	'settings:ftp_pass' => 'Mot de passe FTP',
	'settings:ftp_path' => 'Chemin FTP',
	'settings:ftp_port' => 'Port FTP',
	'settings:ftp_pasv' => 'Mode passif ?',
	'settings:nophpupdates' => "Du fait de votre configuration de serveur, vous devez entrer vos paramètres FTP de manière à ce que Pancake se mette à jour automatiquement. Ces paramètres sont utilisés en interne par Pancake et ne sont jamais transmis à quiconque.",
	'settings:ftp_host' => 'Hôte FTP',
	'settings:uptodate' => 'Pancake est à jour (:1)',
	'settings:newversionavailable' => 'Il y a une nouvelle version de Pancake disponible (:1) !',
	'settings:updatenow' => 'Mettre à jour !',
	'settings:youneedtoconfigurefirst' => 'Votre Pancake n\'est pas encore configuré pour se mettre à jour automatiquement. Veuillez saisir vos paramètres FTP ci-dessous, puis cliquez sur "Sauvegarder les paramètres".<br /> Pancake vous laissera ensuite lancer les mises à jour.',
	'settings:general' => 'Général',
	'settings:email_templates' => 'Emails',
	'settings:taxes' => 'Taxes',
	'settings:currencies' => 'Devises',
	'settings:branding' => 'Marque',
	'settings:payment_methods' => 'Paiement',
	'settings:feeds' => 'Flux',
	'settings:api_keys' => 'Clés d\'API',
	
	'settings:site_name' => 'Nom du site',
	'settings:language' => 'Langage',
	'settings:timezone' => 'Fuseau horaire',
	'settings:notify_email' => 'Adresse email de notification',
	'settings:currency' => 'Devise',
	'settings:theme' => 'Thème Frontend',
	'settings:admin_theme' => 'Thème admin',
	'settings:admin_name' => 'Nom de l\'administrateur',
	'settings:date_format' => 'Format de date',
	'settings:task_time_interval' => 'Intervalle de temps pour les tâches',
	'settings:mailing_address' => 'Adresse postale',
	
	'settings:default_subject' => 'Sujet par défaut',
    'settings:default_contents' => 'Message par défaut',
	'settings:new_estimate' => 'Nouveau devis',
	'settings:new_invoice' => 'Nouvelle facture',
	'settings:new_proposal' => 'Nouvelle proposition',
	'settings:paid_notification' => 'Notification de règlement',
	'settings:payment_receipt' => 'Reçu de paiement',
	
	'settings:logo' => 'Votre logo',
	'settings:frontend_css' => 'CSS personnalisé pour le Frontend',
	'settings:backend_css' => 'CSS personnalisé pour le Backend',
	
	'settings:rss_password' => 'Mot de passe RSS',
	'settings:default_feeds' => 'Flux par défaut',
	'settings:cron_job_feed' => 'Job d\'ordonnancement',
	'settings:feed_generator' => 'Générateur de flux',
	'settings:your_link' => 'Votre lien',
	'settings:bcc' => 'Copie cachée',
	'settings:automaticallybccclientemail' => 'Envoyer automatique une copie de tous les emails de clients à l\'adresse email de notification (définie plus haut)',
	'settings:api_note' => 'Nom / Remarque',
	'settings:api_key' => 'Clé',
	
	'settings:tax_name' => 'Nom de la taxe',
	'settings:tax_value' => 'Valeur',
	'settings:tax_reg' => 'Enregistrement / Code',
	'settings:add_tax' => 'Ajouter une nouvelle taxe',
	
	'settings:currency_name' => 'Nom de la devise',
	'settings:currency_code' => 'Code de la devise',
	'settings:exchange_rate' => 'Taux de conversion',
	'settings:add_currency' => 'Ajouter une nouvelle devise',
	/** End Settings **/	

	'update:ifyourenotsurecontactus' => "Si vous n'êtes pas sûr de ce qu'il faut faire, veuillez <a href='http://pancakeapp.com/forums/newtopic/2/'>démarrer un nouveau sujet de support dans le forum</a>.",
	'update:youmodified' => 'Vous avez modifié',
	'update:youdeleted' => 'Vous avez supprimé',
	'update:loadingpleasewait' => 'Chargement en cours, veuillez patienter...',
	'update:errordownloading' => 'Une mise à jour de Pancake est disponible, mais Pancake n\'arrive pas à la télécharger.',
	'update:herearestepstofix' => 'Voici quelques pistes de solution :',
	'update:makesureuploadsiswritable' => 'Assurez vous que les droits d\'écriture sont affectés au répertoire "uploads" (CHMOD 0777).',
	'update:deletepancakesystemupdate' => 'Supprimez le répertoire "pancake-update-system" (à l\'interieur du répertoire "uploads"), et tout son contenu.',
	'update:loadpancakeagain' => "Rechargez Pancake à nouveau. Si l'erreur persiste, envoyez un email à support@pancakeapp.com, et nous vous aiderons.",
	'update:whatschanged' => "Quoi de neuf dans la :1",
	'update:ftp_conn' => 'Pancake n\'a pas pu se connecter à l\'hôte FTP.',
	'update:ftp_login' => 'Pancake n\'a pas pu se connecter via FTP (mauvais utilisateur / mot de passe FTP ?).',
	'update:ftp_chdir' => 'Pancake n\'a pas pu accéder au chemin FTP (le chemin n\'existe probablement pas).',
	'update:ftp_no_uploads' => 'Pancake n\'a pas été autorisé à uploader des fichiers via FTP.',
	'update:ftp_indexwrong' => 'Le chemin FTP saisi est incorrect. Cela devrait être le chemin vers le répertoire de Pancake.',
	'update:ftp_indexnotfound' => 'Le chemin FTP saisi est incorrect. Cela devrait être le chemin vers le répertoire de Pancake.',
	'update:update_conflict' => 'Vous avez modifié des fichiers depuis la dernière mise à jour. Pour conserver vos personnalisations, voici la liste des fichiers modifiés qui entrent en conflit avec la dernière mise à jour.',
	'update:update_no_perms' => 'Pancake n\'a ni les autorisations suffisantes, ni un accès FTP lui permettant de se mettre à jour tout seul. La mise à jour ne peut pas continuer.',
	'update:review_files' => 'Veuillez vérifier ces fichiers et faire des sauvegardes avant de continuer. Quand la mise à jour sera terminée, vous devrez réintégrer vos modifications. Attention à ne pas simplement remplacer les fichiers mis à jour avec vos fichiers obsolètes modifiés, car cela pourrait faire planter Pancake.',
	'update:internetissues' => "Pancake ne peut pas se connecter à internet.",
	'update:pancakeneedsinternet' => 'Afin de permettre à Pancake to fonctionner correctement, votre serveur doit lui permettre de récupérer des informations sur internet (port 80).',
	'update:maybefirewall' => "Il semble que votre serveur empêche Pancake d'accéder à internet. C'est peut-être dû à un problème de pare-feu sur votre serveur. Veuillez contacter votre hébergeur. Demandez lui d'autoriser PHP à accéder à :1.",
	'update:nointernetaccess' => 'Pas d\'accès internet',
	'update:pancakeupdated' => 'Pancake a été mis à jour de la :1 à la :2',
	/** Action Logger  **/

	/** End Action Logger **/

	/** Partial Payments **/
	'partial:partialpayments' => 'Plan de paiement',
	'partial:totalamounttobepaid' => "Montant total à payer par le client",
    'partial:amountlefttobeadded' => "Montant restant à être ajoutés au plan de paiement",
    'partial:amounttoobig' => "Montant qui doit être retiré du plan de paiement",
    'partial:noamountneeded' => "Votre plan de paiement est terminé.",
	'partial:amount'          => 'Montant',
	'partial:add_payment' => 'Ajouter paiement',
	'partial:dueon'           => 'Date d\'échéance',
	'partial:addanother'      => 'Ajouter une partie à ce règlement',
	'partial:disabledforrecurring' => 'Les factures récurrentes sont limitées à un règlement en une fois',
	'partial:paymentdetails' => 'Détails de règlement',
	'partial:wrongtotal' => 'La somme de toutes les parties de ce plan de paiement ne correspond pas au montant facturé.',
	'partial:problemsaving' => 'Un probème est survenu lors de la sauvegarde du plan de paiement. Veuillez réessayer.',
	'partial:wrongtotalbutsaved' => 'La somme de toutes les parties de ce plan de paiement ne correspond pas au montant facturé.<br />Les changements sur la facture ont été sauvegardés, mais vous devez corriger le plan de paiement.',
	'partial:problemsavingbutsaved' => 'Un probème est survenu lors de la sauvegarde du plan de paiement. Veuillez réessayer.<br />Les changements sur la facture ont été sauvegardés, mais pas le plan de paiement.',
	'partial:savepaymentdetails' => 'Sauvegarder le plan de paiement',
	'partial:partpaidthanks' => "Cette partie du plan de paiement a été réglée. Merci.",
	'partial:proceedtopayment' => 'Procéder au règlement',
	'partial:topaynowgoto' => 'Pour régler maintenant, veuillez suivre le lien : :1',
	'partial:dueondate' => 'Date d\'échéance : :1',
	'partial:paymentmethod' => 'Moyen de paiement',
	'partial:paymentdate' => 'Date de règlement',
	'partial:paymentstatus' => 'Statut du règlement',
	'partial:transactionid' => 'Identifiant de transaction',
	'partial:markaspaid' => 'Marquer comme réglée',
	'partial:transactionfee' => 'Frais de transaction',
	/** End Partial Payments **/

	/** Payment Gateways **/
	'paypal:clickhere' => 'Cliquez ici pour procéder',
	'authorize:transaction_key' => 'Clé de transaction',
	'paypal:email'     => 'Adresse email PayPal',
	'paypal:fee'     => 'Frais PayPal (%)',
	'paypalpro:paypalpro' => 'PayPal Payments Pro',
	'paypalpro:viacreditcard' => 'Payer par carte bancaire',
	'cash:cash' => 'Espèces',
	'check:check' => 'Chèque',
	'moneyorder:moneyorder' => 'Mandat international',
	'creditcard:creditcard' => 'Carte bancaire',
	'banktransfer:banktransfer' => 'Virement bancaire',
	'gateways:errorupdating' => 'Une erreur est survenue lors de la mise à jour des moyens de paiement. Veuillez contacter le support.',
	'gateways:paymentmethods' => 'Moyens de paiement',
	'gateways:selectpaymentmethod' => 'Sélectionnez un moyen de paiement',
	'gateways:nogatewayused' => 'Pas de moyen sélectionné : la partie est impayée.',
	'gateways:completed' => 'Terminé',
	'gateways:refunded' => 'Remboursé',
	'gateways:unpaid' => 'Impayé',
	'gateways:paymentrejected' => 'Paiement rejeté :1',
	'gateways:rejectedemail' => 'Pancake a été notifié au sujet d\'un règlement par :1 que l\'un de vos clients (:2) a effectué, mais qui a été rejeté.',
	'gateways:pending' => 'En suspens',
	'gateways:returntowebsite' => 'Retourner sur :1',
	'gateways:cc_type' => 'Type de carte bancaire',
	'gateways:cc_number' => 'Numéro de carte bancaire',
	'gateways:cc_exp' => 'Date d\'expiration',
	'gateways:cc_code' => 'Cryptogramme visuel',
	'gateways:payment_details' => 'Plan de paiement',
	'gateways:api_signature' => 'Signature d\'API',
	'gateways:api_password' => 'Mot de passe d\'API',
	'gateways:api_username' => 'Utilisateur d\'API',
	/** End Payment Gateways **/
	
	/** Kitchen Area **/
	'kitchen:edit_comment' => 'Éditer commentaire',
	'kitchen:kitchen_name'	=>	'Espace client',
	'kitchen:pleaselogin'	=>	'Veuillez entrer votre phrase secrète pour accéder à votre compte',
	'kitchen:nocomments'	=>	'Il n\'y a pas encore de commentaires.',
	'kitchen:comment'	=>	'Commentaire',
	'kitchen:comments'	=>	'Commentaires',
	'kitchen:file'	=>	'Fichier',
	'kitchen:submitcomment'	=>	'Ajouter un commentaire',
	'kitchen:attachment'	=>	'Pièce jointe',
	'kitchen:saidon'	=>	'ajouté le :1, à :2',
	'kitchen:subjectinvoice' => 'Nouveau commentaire pour la facture n°',
	'kitchen:subjectestimate' => 'Nouveau commentaire pour le devis n°',
	'kitchen:subjectproject' => 'Nouveau commentaire pour le projet :',
	'kitchen:subjecttask' => 'Nouveau commentaire pour la tâche :',
	'kitchen:subjectproposal' => 'Nouveau commentaire pour la proposition :',
	'kitchen:backtodashboard'	=>	'Retour au tableau de bord',
	'kitchen:client_welcome'	=>	'Espace client pour :',
	'kitchen:urltosend'	=>	'Adresse de l\'espace client',
	'kitchen:nopassphrase'	=>	'Aucune "phrase secrète" n\'est actuellement paramétrée, ce qui signifie que l\'espace client est accessible juste avec l\'adresse du lien. Si vous voulez sécuriser cet accès, veuillez éditer le client et lui affecter une phrase secrète.',
	'kitchen:passphraseset'	=>	'Ce client a une phrase secrète paramétrée',
	'kitchen:passphrase'	=>	'Phrase secrète',
	'kitchen:description'	=>	'Voici l\'adresse à envoyer à votre client pour lui permettre d\'accéder à son espace client où il pourra voir les éléments, tels que ses projets et factures, que vous avez rendu visibles.',
	
	/** END Kitchen Area **/

);

/** End of file: pancake_lang.php **/