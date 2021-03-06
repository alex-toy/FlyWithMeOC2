<?php
namespace Model;
 
use \OCFram\Manager;
use \Entity\Pilot;
 
abstract class PilotManager extends Manager
{
  /**
   * Méthode permettant d'ajouter un pilote.
   * @param $news News La news à ajouter
   * @return void
   */
  abstract protected function add(Pilot $pilot);
 
  /**
   * Méthode permettant d'enregistrer une news.
   * @param $news News la news à enregistrer
   * @see self::add()
   * @see self::modify()
   * @return void
   */
  public function save(Pilot $pilot)
  {
    if ($pilot->isValid())
    {
      $pilot->isNew() ? $this->add($pilot) : $this->modify($pilot);
    }
    else
    {
      throw new \RuntimeException('Le pilote doit être validée pour être enregistrée');
    }
  }
 
  /**
   * Méthode renvoyant le nombre de news total.
   * @return int
   */
  abstract public function count();
 
  /**
   * Méthode permettant de supprimer une news.
   * @param $id int L'identifiant de la news à supprimer
   * @return void
   */
  abstract public function delete($id);
 
  
 
  /**
   * Méthode retournant une news précise.
   * @param $id int L'identifiant de la news à récupérer
   * @return News La news demandée
   */
  abstract public function getUnique($id);
 
  /**
   * Méthode permettant de modifier une news.
   * @param $news news la news à modifier
   * @return void
   */
  abstract protected function modify(Articles $news);
  
  

  
  
  
  
}